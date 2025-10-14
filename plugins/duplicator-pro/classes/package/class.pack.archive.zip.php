<?php

/**
 * Class to create a zip file using PHP ZipArchive
 *
 * Standard: PSR-2 (almost)
 *
 * @link http://www.php-fig.org/psr/psr-2
 *
 * @package    DUP_PRO
 * @subpackage classes/package
 * @copyright  (c) 2017, Snapcreek LLC
 * @license    https://opensource.org/licenses/GPL-3.0 GNU Public License
 * @since      1.0.0
 *
 * @notes: Trace process time
 *  $timer01 = microtime(true);
 *  DUP_PRO_Log::trace("SCAN TIME-B = " . DUP_PRO_U::elapsedTime(microtime(true), $timer01));
 */

defined('ABSPATH') || defined('DUPXABSPATH') || exit;

use Duplicator\Core\Constants;
use Duplicator\Libs\Index\FileIndexManager;
use Duplicator\Libs\Snap\SnapIO;
use Duplicator\Libs\Snap\SnapServer;
use Duplicator\Libs\Snap\SnapString;
use Duplicator\Libs\Snap\SnapUtil;
use Duplicator\Models\SystemGlobalEntity;
use Duplicator\Package\AbstractPackage;
use Duplicator\Package\Create\BuildProgress;
use Duplicator\Package\PackageUtils;
use Duplicator\Utils\ZipArchiveExtended;

class DUP_PRO_ZipArchive
{
    /** @var DUP_PRO_Global_Entity */
    private $global;
    private bool $optMaxBuildTimeOn;
    /** @var int */
    private $maxBuildTimeFileSize = 100000;
    /** @var int */
    private $throttleDelayInUs = 0;
    private \Duplicator\Package\AbstractPackage $package;
    private \Duplicator\Utils\ZipArchiveExtended $zipArchive;

    /**
     * Class constructor
     *
     * @param AbstractPackage $package The Backup to create the zip file for
     */
    public function __construct(AbstractPackage $package)
    {
        $this->global            = DUP_PRO_Global_Entity::getInstance();
        $this->optMaxBuildTimeOn = ($this->global->max_package_runtime_in_min > 0);
        $this->throttleDelayInUs = $this->global->getMicrosecLoadReduction();

        $this->package    = $package;
        $this->zipArchive = new ZipArchiveExtended($this->package->StorePath . '/' . $this->package->Archive->getFileName());

        $password = $this->package->Archive->getArchivePassword();
        if (strlen($password) > 0) {
            $this->zipArchive->setEncrypt(true, $password);
        }
    }

    /**
     * Creates the zip file and adds the SQL file to the archive
     *
     * @return bool     Returns true if the process was successful
     */
    public function create(): bool
    {
        if (!ZipArchiveExtended::isPhpZipAvailable()) {
            DUP_PRO_Log::trace("Zip archive doesn't exist");
            throw new Exception('Zip archive doesn\'t exist');
        }

        PackageUtils::safeTmpCleanup(true);
        if ($this->package->ziparchive_mode == DUP_PRO_ZipArchive_Mode::SingleThread) {
            return $this->createSingleThreaded();
        } else {
            return $this->createMultiThreaded();
        }
    }

    /**
     * Creates the zip file using a single thread approach
     *
     * @return bool     Returns true if the process was successful
     */
    private function createSingleThreaded(): bool
    {
        $buildProgress = $this->package->build_progress;
        $countFiles    = 0;
        $compressDir   = SnapIO::safePathUntrailingslashit($this->package->Archive->PackDir);
        $zipPath       = $this->package->StorePath . '/' . $this->package->Archive->getFileName();
        $filterDirs    = empty($this->package->Archive->FilterDirs)  ? 'not set' : rtrim(str_replace(';', "\n\t", $this->package->Archive->FilterDirs));
        $filterFiles   = empty($this->package->Archive->FilterFiles) ? 'not set' : rtrim(str_replace(';', "\n\t", $this->package->Archive->FilterFiles));
        $filterExts    = empty($this->package->Archive->FilterExts)  ? 'not set' : $this->package->Archive->FilterExts;
        $filterOn      = ($this->package->Archive->FilterOn) ? 'ON' : 'OFF';
        $validation    = ($this->global->ziparchive_validation) ? 'ON' : 'OFF';
        $compression   = $buildProgress->current_build_compression ? 'ON' : 'OFF';
        $targetRoot    = DUP_PRO_Archive::getTargetRootPath();

        $this->zipArchive->setCompressed($buildProgress->current_build_compression);
        //PREVENT RETRIES PAST 3:  Default is 10 (Constants::MAX_BUILD_RETRIES)
        //since this is ST Mode no reason to keep trying like MT
        if ($buildProgress->retries >= 3) {
            $err = __('Backup build appears stuck so marking Backup as failed. Is the PHP or Web Server timeouts too low?', 'duplicator-pro');
            DUP_PRO_Log::error(__('Build Failure', 'duplicator-pro'), $err);
            DUP_PRO_Log::trace($err);
            return $buildProgress->failed = true;
        } else {
            if ($buildProgress->retries > 0) {
                DUP_PRO_Log::infoTrace("**NOTICE: Retry count at: {$buildProgress->retries}");
            }
            $buildProgress->retries++;
            $this->package->update();
        }

        //LOAD SCAN REPORT
        $scanReport = $this->package->getScanReportFromJson(DUPLICATOR_PRO_SSDIR_PATH_TMP . "/{$this->package->getNameHash()}_scan.json");

        //============================================
        //ST: START ZIP
        //============================================
        if (!$this->package->Archive->isArchiveStarted()) {
            DUP_PRO_Log::info("\n********************************************************************************");
            DUP_PRO_Log::info("ARCHIVE ZipArchive Single-Threaded");
            DUP_PRO_Log::info("********************************************************************************");
            DUP_PRO_Log::info("ARCHIVE DIR:  " . $compressDir);
            DUP_PRO_Log::info("ARCHIVE FILE: " . basename($zipPath));
            DUP_PRO_Log::info("COMPRESSION: *{$compression}*");
            DUP_PRO_Log::info("VALIDATION: *{$validation}*");
            DUP_PRO_Log::info("FILTERS: *{$filterOn}*");
            DUP_PRO_Log::info("DIRS:\t{$filterDirs}");
            DUP_PRO_Log::info("EXTS:  {$filterExts}");
            DUP_PRO_Log::info("FILES:  {$filterFiles}");
            DUP_PRO_Log::info("----------------------------------------");
            DUP_PRO_Log::info("COMPRESSING");
            DUP_PRO_Log::info("SIZE:\t" . $scanReport->ARC->Size);
            DUP_PRO_Log::info("STATS:\tDirs " . $scanReport->ARC->DirCount . " | Files " . $scanReport->ARC->FileCount . " | Total " . $scanReport->ARC->FullCount);
            if (($scanReport->ARC->DirCount == '') || ($scanReport->ARC->FileCount == '') || ($scanReport->ARC->FullCount == '')) {
                DUP_PRO_Log::error('Invalid Scan Report Detected', 'Invalid Scan Report Detected');
                return $buildProgress->failed = true;
            }
            $this->package->Archive->setArcvhieStarted();
        }

        //============================================
        //ST: ZIP DIRECTORIES
        //Keep this loop tight: ZipArchive can handle over 10k+ dir entries in under 0.01 seconds.
        //Its really fast without files so no need to do status pushes or other checks in loop
        //============================================
        $indexManager = $this->package->Archive->getIndexManager();
        if ($buildProgress->next_archive_dir_index < $scanReport->ARC->DirCount) {
            if (!$this->zipArchive->open()) {
                DUP_PRO_Log::error("Couldn't open $zipPath", '');
                return $buildProgress->failed = true;
            }

            DUP_PRO_Log::trace("ADDING EMPTY DIRS TO ZIP");
            foreach ($indexManager->iteratePaths(FileIndexManager::LIST_TYPE_DIRS, $targetRoot) as $dir) {
                $emptyDir = $this->package->Archive->getLocalPath($dir);
                // DUP_PRO_Log::trace("ADD DIR TO ZIP: '{$emptyDir}'");
                if (!$this->zipArchive->addEmptyDir($emptyDir)) {
                    if (empty($compressDir) || strpos($dir, rtrim($compressDir, '/')) != 0) {
                        DUP_PRO_Log::infoTrace("WARNING: Unable to zip directory: '{$dir}'");
                    }
                }
                $buildProgress->next_archive_dir_index++;
            }
            DUP_PRO_Log::trace("NUMBER OF DIRS ADDED: " . $buildProgress->next_archive_dir_index);

            if ($this->zipArchive->close()) {
                $this->package->update();
            } else {
                $err = 'ZipArchive close failure during directory add phase.';
                $this->setDupArchiveSwitchFix($err);
                return $buildProgress->failed = true;
            }
        }

        //============================================
        //ST: ZIP FILES
        //============================================
        if ($buildProgress->archive_built === false) {
            if ($this->zipArchive->open() === false) {
                DUP_PRO_Log::error("Can not open zip file at: [{$zipPath}]", '');
                return $buildProgress->failed = true;
            }

            // Since we have to estimate progress in Single Thread mode
            // set the status when we start archiving just like Shell Exec
            $total_file_size       = 0;
            $total_file_count_trip = ($scanReport->ARC->UFileCount + 1000);
            foreach ($indexManager->iteratePaths(FileIndexManager::LIST_TYPE_FILES, $targetRoot) as $file) {
                //NON-ASCII check
                if (preg_match('/[^\x20-\x7f]/', $file)) {
                    if (!$this->isUTF8FileSafe($file)) {
                        continue;
                    }
                }

                if ($this->global->ziparchive_validation) {
                    if (!is_readable($file)) {
                        DUP_PRO_Log::infoTrace("NOTICE: File [{$file}] is unreadable!");
                        continue;
                    }
                }

                $local_name = $this->package->Archive->getLocalPath($file);
                if (!$this->zipArchive->addFile($file, $local_name)) {
                    // Assumption is that we continue?? for some things this would be fatal others it would be ok - leave up to user
                    DUP_PRO_Log::info("WARNING: Unable to zip file: {$file}");
                    continue;
                }

                $total_file_size += filesize($file);

                //ST: SERVER THROTTLE
                if ($this->throttleDelayInUs !== 0) {
                    usleep($this->throttleDelayInUs);
                }

                //Prevent Overflow
                if ($countFiles++ > $total_file_count_trip) {
                    DUP_PRO_Log::error("ZipArchive-ST: file loop overflow detected at {$countFiles}", '');
                    return $buildProgress->failed = true;
                }
            }

            //START ARCHIVE CLOSE
            $total_file_size_easy = SnapString::byteSize($total_file_size);
            DUP_PRO_Log::trace("Doing final zip close after adding $total_file_size_easy ({$total_file_size})");
            if ($this->zipArchive->close()) {
                DUP_PRO_Log::trace("Final zip closed.");
                $buildProgress->next_archive_file_index = $countFiles;
                $buildProgress->archive_built           = true;
                $this->package->update();
            } else {
                if ($this->global->ziparchive_validation === false) {
                    $this->global->ziparchive_validation = true;
                    $this->global->save();
                    DUP_PRO_Log::infoTrace("**NOTICE: ZipArchive: validation mode enabled");
                } else {
                    $err = 'ZipArchive close failure during file phase with file validation enabled';
                    $this->setDupArchiveSwitchFix($err);
                    return $buildProgress->failed = true;
                }
            }
        }

        //============================================
        //ST: LOG FINAL RESULTS
        //============================================
        if ($buildProgress->archive_built) {
            $timerAllEnd = microtime(true);
            $timerAllSum = SnapString::formattedElapsedTime($timerAllEnd, $buildProgress->archive_start_time);
            $zipFileSize = @filesize($zipPath);
            DUP_PRO_Log::info("MEMORY STACK: " . SnapServer::getPHPMemory());
            DUP_PRO_Log::info("FINAL SIZE: " . SnapString::byteSize($zipFileSize));
            DUP_PRO_Log::info("ARCHIVE RUNTIME: {$timerAllSum}");

            if ($this->zipArchive->open()) {
                $this->package->Archive->file_count = $this->zipArchive->getNumFiles();
                $this->package->update();
                $this->zipArchive->close();
            } else {
                DUP_PRO_Log::error("ZipArchive open failure.", "Encountered when retrieving final archive file count.");
                return $buildProgress->failed = true;
            }
        }

        return true;
    }

    /**
     * Creates the zip file using a multi-thread approach
     *
     * @return bool Returns true if the process was successful
     */
    private function createMultiThreaded(): bool
    {
        $buildProgress = $this->package->build_progress;
        $timed_out     = false;
        $countFiles    = 0;
        $compressDir   = SnapIO::safePathUntrailingslashit($this->package->Archive->PackDir);
        $zipPath       = $this->package->StorePath . '/' . $this->package->Archive->getFileName();
        $filterDirs    = empty($this->package->Archive->FilterDirs)  ? 'not set' : rtrim(str_replace(';', "\n\t", $this->package->Archive->FilterDirs));
        $filterFiles   = empty($this->package->Archive->FilterFiles) ? 'not set' : rtrim(str_replace(';', "\n\t", $this->package->Archive->FilterFiles));
        $filterExts    = empty($this->package->Archive->FilterExts) ? 'not set' : $this->package->Archive->FilterExts;
        $filterOn      = ($this->package->Archive->FilterOn) ? 'ON' : 'OFF';
        $compression   = $buildProgress->current_build_compression ? 'ON' : 'OFF';
        $this->zipArchive->setCompressed($buildProgress->current_build_compression);
        $scanFilepath = DUPLICATOR_PRO_SSDIR_PATH_TMP . "/{$this->package->getNameHash()}_scan.json";
        $targetRoot   = DUP_PRO_Archive::getTargetRootPath();

        $scanReport   = $this->package->getScanReportFromJson($scanFilepath);
        $indexManager = $this->package->Archive->getIndexManager();

        //============================================
        //MT: START ZIP & ADD SQL FILE
        //============================================
        if (!$this->package->Archive->isArchiveStarted()) {
            DUP_PRO_Log::info("\n********************************************************************************");
            DUP_PRO_Log::info("ARCHIVE Mode:ZipArchive Multi-Threaded");
            DUP_PRO_Log::info("********************************************************************************");
            DUP_PRO_Log::info("ARCHIVE DIR:  " . $compressDir);
            DUP_PRO_Log::info("ARCHIVE FILE: " . basename($zipPath));
            DUP_PRO_Log::info("COMPRESSION: *{$compression}*");
            DUP_PRO_Log::info("FILTERS: *{$filterOn}*");
            DUP_PRO_Log::info("DIRS:  {$filterDirs}");
            DUP_PRO_Log::info("EXTS:  {$filterExts}");
            DUP_PRO_Log::info("FILES:  {$filterFiles}");
            DUP_PRO_Log::info("----------------------------------------");
            DUP_PRO_Log::info("COMPRESSING");
            DUP_PRO_Log::info("SIZE:\t" . $scanReport->ARC->Size);
            DUP_PRO_Log::info("STATS:\tDirs " . $scanReport->ARC->DirCount . " | Files " . $scanReport->ARC->FileCount . " | Total " . $scanReport->ARC->FullCount);
            if (($scanReport->ARC->DirCount == '') || ($scanReport->ARC->FileCount == '') || ($scanReport->ARC->FullCount == '')) {
                DUP_PRO_Log::error('Invalid Scan Report Detected', 'Invalid Scan Report Detected');
                return $buildProgress->failed = true;
            }
            $this->package->Archive->setArcvhieStarted();

            //============================================
            //MT: ZIP DIRECTORIES
            //Keep this loop tight: ZipArchive can handle over 10k dir entries in under 0.01 seconds.
            //Its really fast without files no need to do status pushes or other checks in loop
            //============================================
            if ($this->zipArchive->open()) {
                DUP_PRO_Log::trace("ADDING EMPTY DIRS TO ZIP");
                foreach ($indexManager->iteratePaths(FileIndexManager::LIST_TYPE_DIRS, $targetRoot) as $dir) {
                    $emptyDir = $this->package->Archive->getLocalPath($dir);
                    // DUP_PRO_Log::trace("ADD DIR TO ZIP: '{$emptyDir}'");
                    if (!$this->zipArchive->addEmptyDir($emptyDir)) {
                        if (empty($compressDir) || strpos($dir, rtrim($compressDir, '/')) != 0) {
                            DUP_PRO_Log::infoTrace("WARNING: Unable to zip directory: '{$dir}'");
                        }
                    }
                    $buildProgress->next_archive_dir_index++;
                }
                DUP_PRO_Log::trace("NUMBER OF DIRS ADDED: " . $buildProgress->next_archive_dir_index);


                $this->package->update();
                if ($buildProgress->timedOut($this->global->php_max_worker_time_in_sec)) {
                    $timed_out = true;
                    $diff      = time() - $buildProgress->thread_start_time;
                    DUP_PRO_Log::trace("Timed out after hitting thread time of $diff {$this->global->php_max_worker_time_in_sec} so quitting zipping early in the directory phase");
                }
            } else {
                DUP_PRO_Log::error("Couldn't open $zipPath", '');
                return $buildProgress->failed = true;
            }

            if ($this->zipArchive->close() === false) {
                $err = __('ZipArchive close failure during directory add phase.', 'duplicator-pro');
                $this->setDupArchiveSwitchFix($err);
                return $buildProgress->failed = true;
            }
        }

        //============================================
        //MT: ZIP FILES
        //============================================
        if ($timed_out === false) {
            // PREVENT RETRIES (10x)
            if ($buildProgress->retries > Constants::MAX_BUILD_RETRIES) {
                $err = __('Zip build appears stuck.', 'duplicator-pro');
                $this->setDupArchiveSwitchFix($err);

                $error_msg = __('Backup build appears stuck so marking Backup as failed. Recommend setting Settings > Backups > Archive Engine to DupArchive', 'duplicator-pro');
                DUP_PRO_Log::error(__('Build Failure', 'duplicator-pro'), $error_msg);
                DUP_PRO_Log::trace($error_msg);
                return $buildProgress->failed = true;
            } else {
                $buildProgress->retries++;
                $this->package->update();
            }

            $zip_is_open                    = false;
            $total_file_size                = 0;
            $incremental_file_size          = 0;
            $used_zip_file_descriptor_count = 0;
            $total_file_count               = empty($scanReport->ARC->UFileCount) ? 0 : $scanReport->ARC->UFileCount;
            foreach ($indexManager->iteratePaths(FileIndexManager::LIST_TYPE_FILES, $targetRoot) as $file) {
                if ($zip_is_open || ($countFiles == $buildProgress->next_archive_file_index)) {
                    if ($zip_is_open === false) {
                        DUP_PRO_Log::trace("resuming archive building at file # $countFiles");
                        if ($this->zipArchive->open() !== true) {
                            DUP_PRO_Log::error("Couldn't open $zipPath", '');
                            $buildProgress->failed = true;
                            return true;
                        }
                        $zip_is_open = true;
                    }

                    //NON-ASCII check
                    if (preg_match('/[^\x20-\x7f]/', $file)) {
                        if (!$this->isUTF8FileSafe($file)) {
                            continue;
                        }
                    } elseif (!file_exists($file)) {
                        DUP_PRO_Log::trace("NOTICE: ASCII file [{$file}] does not exist!");
                        continue;
                    }

                    $local_name = $this->package->Archive->getLocalPath($file);
                    $file_size  = filesize($file);
                    $zip_status = $this->zipArchive->addFile($file, $local_name);

                    if ($zip_status) {
                        $total_file_size       += $file_size;
                        $incremental_file_size += $file_size;
                    } else {
                        // Assumption is that we continue?? for some things this would be fatal others it would be ok - leave up to user
                        DUP_PRO_Log::info("WARNING: Unable to zip file: {$file}");
                    }

                    $countFiles++;
                    $chunk_size_in_bytes = $this->global->ziparchive_chunk_size_in_mb * 1000000;
                    if ($incremental_file_size > $chunk_size_in_bytes) {
                        // Only close because of chunk size and file descriptors when in legacy mode
                        DUP_PRO_Log::trace("closing zip because ziparchive mode = {$this->global->ziparchive_mode} fd count = $used_zip_file_descriptor_count or incremental file size=$incremental_file_size and chunk size = $chunk_size_in_bytes");
                        $incremental_file_size          = 0;
                        $used_zip_file_descriptor_count = 0;
                        if ($this->zipArchive->close() == true) {
                            $progressPercent = SnapUtil::getWorkPercent(
                                AbstractPackage::STATUS_ARCSTART,
                                AbstractPackage::STATUS_ARCDONE,
                                $total_file_count,
                                $countFiles
                            );

                            $buildProgress->next_archive_file_index = $countFiles;
                            $buildProgress->retries                 = 0;
                            $this->package->setProgressPercent($progressPercent);
                            $this->package->update();
                            $zip_is_open = false;
                            DUP_PRO_Log::trace("closed zip");
                        } else {
                            $err = 'ZipArchive close failure during file phase using multi-threaded setting.';
                            $this->setDupArchiveSwitchFix($err);
                            return $buildProgress->failed = true;
                        }
                    }

                    //MT: SERVER THROTTLE
                    if ($this->throttleDelayInUs !== 0) {
                        usleep($this->throttleDelayInUs);
                    }

                    //MT: MAX WORKER TIME (SECS)
                    if ($buildProgress->timedOut($this->global->php_max_worker_time_in_sec)) {
                        // Only close because of timeout
                        $timed_out = true;
                        $diff      = time() - $buildProgress->thread_start_time;
                        DUP_PRO_Log::trace("Timed out after hitting thread time of $diff so quitting zipping early in the file phase");
                        break;
                    }

                    //MT: MAX BUILD TIME (MINUTES)
                    //Only stop to check on larger files above 100K to avoid checking every single file
                    if ($file_size > $this->maxBuildTimeFileSize && $this->optMaxBuildTimeOn) {
                        $elapsed_sec     = time() - $this->package->timer_start;
                        $elapsed_minutes = $elapsed_sec / 60;
                        if ($elapsed_minutes > $this->global->max_package_runtime_in_min) {
                            DUP_PRO_Log::trace("ZipArchive: Multi-thread max build time {$this->global->max_package_runtime_in_min} minutes reached killing process.");
                            return false;
                        }
                    }
                } else {
                    $countFiles++;
                }
            }

            DUP_PRO_Log::trace("total file size added to zip = $total_file_size");
            if ($zip_is_open) {
                DUP_PRO_Log::trace("Doing final zip close after adding $incremental_file_size");
                if ($this->zipArchive->close()) {
                    DUP_PRO_Log::trace("Final zip closed.");
                    $buildProgress->next_archive_file_index = $countFiles;
                    $buildProgress->retries                 = 0;
                    $this->package->update();
                } else {
                    $err = __('ZipArchive close failure.', 'duplicator-pro');
                    $this->setDupArchiveSwitchFix($err);
                    DUP_PRO_Log::error($err);
                    return $buildProgress->failed = true;
                }
            }
        }


        //============================================
        //MT: LOG FINAL RESULTS
        //============================================
        if ($timed_out === false) {
            $buildProgress->archive_built = true;
            $buildProgress->retries       = 0;
            $this->package->update();
            $timerAllEnd = microtime(true);
            $timerAllSum = SnapString::formattedElapsedTime($timerAllEnd, $buildProgress->archive_start_time);
            $zipFileSize = @filesize($zipPath);
            DUP_PRO_Log::info("COMPRESSED SIZE: " . SnapString::byteSize($zipFileSize));
            DUP_PRO_Log::info("ARCHIVE RUNTIME: {$timerAllSum}");
            DUP_PRO_Log::info("MEMORY STACK: " . SnapServer::getPHPMemory());
            if ($this->zipArchive->open() === true) {
                $this->package->Archive->file_count = $this->zipArchive->getNumFiles();
                $this->package->update();
                $this->zipArchive->close();
            } else {
                DUP_PRO_Log::error("ZipArchive open failure.", "Encountered when retrieving final archive file count.");
                return $buildProgress->failed = true;
            }
        }

        return !$timed_out;
    }

    /**
     * Encodes a UTF8 file and then determines if it is safe to add to an archive
     *
     * @param string $file The file to test
     *
     * @return bool Returns true if the file is readable and safe to add to archive
     */
    private function isUTF8FileSafe($file)
    {
        $is_safe       = true;
        $original_file = $file;
        // Necessary for adfron type files
        if (DUP_PRO_STR::hasUTF8($file)) {
            $file = mb_convert_encoding($file, 'ISO-8859-1', 'UTF-8');
        }

        if (file_exists($file) === false) {
            if (file_exists($original_file) === false) {
                DUP_PRO_Log::trace("$file CAN'T BE READ!");
                DUP_PRO_Log::info("WARNING: Unable to zip file: {$file}. Cannot be read");
                $is_safe = false;
            }
        }

        return $is_safe;
    }

    /**
     * Wrapper for switching to DupArchive quick fix
     *
     * @param string $message The error message
     *
     * @return void
     */
    private function setDupArchiveSwitchFix($message): void
    {
        $fix_text = __('Click to switch archive engine to DupArchive.', 'duplicator-pro');

        $this->setFix(
            $message,
            $fix_text,
            [
                'global' => [
                    'archive_build_mode' => DUP_PRO_Archive_Build_Mode::DupArchive,
                ],
            ]
        );
    }

    /**
     * Sends an error to the trace and build logs and sets the UI message
     *
     * @param string  $message The error message
     * @param string  $fix     The details for how to fix the issue
     * @param mixed[] $option  The options to set
     *
     * @return void
     */
    private function setFix($message, $fix, array $option): void
    {
        DUP_PRO_Log::trace($message);
        DUP_PRO_Log::error("$message **FIX:  $fix.", '');
        $system_global = SystemGlobalEntity::getInstance();
        $system_global->addQuickFix($message, $fix, $option);
    }
}
