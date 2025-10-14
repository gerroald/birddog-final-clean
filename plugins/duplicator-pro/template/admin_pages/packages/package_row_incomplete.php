<?php

/**
 * @package Duplicator
 */

use Duplicator\Controllers\PackagesPageController;
use Duplicator\Package\AbstractPackage;
use Duplicator\Package\PackageUtils;
use Duplicator\Package\Recovery\RecoveryPackage;
use Duplicator\Views\UserUIOptions;

defined("ABSPATH") or die("");

/**
 * Variables
 *
 * @var Duplicator\Core\Controllers\ControllersManager $ctrlMng
 * @var Duplicator\Core\Views\TplMng $tplMng
 * @var array<string, mixed> $tplData
 * @var ?DUP_PRO_Package $package
 */
$package = $tplData['package'];
$global  = DUP_PRO_Global_Entity::getInstance();

/** @var int */
$status = $tplData['status'];

if ($status >= AbstractPackage::STATUS_COMPLETE) {
    return;
}

$isRecoveable      = RecoveryPackage::isPackageIdRecoveable($package->getId());
$isRecoverPoint    = (RecoveryPackage::getRecoverPackageId() === $package->getId());
$pack_name         = $package->getName();
$pack_archive_size = $package->Archive->Size;
$pack_namehash     = $package->getNameHash();
$pack_dbonly       = $package->isDBOnly();
$brand             = $package->Brand;

//Links
$uniqueid         = $package->getNameHash();
$archive_exists   = ($package->getLocalPackageFilePath(AbstractPackage::FILE_TYPE_ARCHIVE) != false);
$installer_exists = ($package->getLocalPackageFilePath(AbstractPackage::FILE_TYPE_INSTALLER) != false);
$progress_error   = '';

//ROW CSS
$rowClasses   = [''];
$rowClasses[] = 'dup-row';
$rowClasses[] = 'dup-row-incomplete';
$rowClasses[] = ($isRecoverPoint) ? 'dup-recovery-package' : '';
$rowCSS       = trim(implode(' ', $rowClasses));

//ArchiveInfo
$archive_name         = $package->Archive->getFileName();
$archiveDownloadURL   = $package->getLocalPackageFileURL(AbstractPackage::FILE_TYPE_ARCHIVE);
$installerDownloadURL = $package->getLocalPackageFileURL(AbstractPackage::FILE_TYPE_INSTALLER);
$installerFullName    = $package->Installer->getInstallerName();

$createdFormat = UserUIOptions::getInstance()->get(UserUIOptions::VAL_CREATED_DATE_FORMAT);

//Lang Values
$txt_DatabaseOnly = __('Database Only', 'duplicator-pro');

$cellErrCSS = '';

if ($status < AbstractPackage::STATUS_COPIEDPACKAGE) {
    // In the process of building
    $size      = 0;
    $tmpSearch = glob(DUPLICATOR_PRO_SSDIR_PATH_TMP . "/{$pack_namehash}_*");

    if (is_array($tmpSearch)) {
        $result = @array_map('filesize', $tmpSearch);
        $size   = array_sum($result);
    }
    $pack_archive_size = $size;
}

if ($status < 0) {
    //FAILURES AND CANCELLATIONS
    switch ($status) {
        case AbstractPackage::STATUS_ERROR:
            $cellErrCSS = 'dup-cell-err';
            break;
        case AbstractPackage::STATUS_BUILD_CANCELLED:
        case AbstractPackage::STATUS_STORAGE_CANCELLED:
            $cellErrCSS = 'dup-cell-cancelled';
            break;
    }
}
?>

<tr
    id="dup-row-pack-id-<?php echo (int) $package->getId(); ?>"
    data-package-id="<?php echo (int) $package->getId(); ?>"
    data-status="<?php echo (int) $status; ?>"
    class="<?php echo esc_attr($rowCSS); ?>">
    <td class="dup-check-column dup-cell-chk">
        <label for="<?php echo (int) $package->getId(); ?>">
            <input name="delete_confirm"
                type="checkbox" id="<?php echo (int) $package->getId(); ?>"
                <?php echo ($status >= AbstractPackage::STATUS_PRE_PROCESS) ? 'disabled="disabled"' : ''; ?> />
        </label>
    </td>
    <td class="dup-name-column dup-cell-name">
        <?php echo esc_html($pack_name); ?>
    </td>
    <td class="dup-note-column">
    </td>
    <td class="dup-storages-column">
    </td>
    <td class="dup-flags-column">
        <?php $tplMng->render('admin_pages/packages/row_parts/falgs_cell'); ?>
    </td>
    <td class="dup-size-column">
        <?php if ($status >= AbstractPackage::STATUS_PRE_PROCESS) {
            $package->getDisplaySize();
        } else {
            esc_html_e('N/A', 'duplicator-pro');
        } ?>
    </td>
    <td class="dup-created-column">
        <?php echo esc_html(PackageUtils::formatLocalDateTime($package->getCreated(), $createdFormat)); ?>
    </td>
    <td class="dup-age-column">
        <?php echo esc_html($package->getPackageLife('human')); ?>
    </td>
    <td class="dup-cell-incomplete <?php echo esc_attr($cellErrCSS); ?> no-select" colspan="3">
        <?php if ($status >= AbstractPackage::STATUS_PRE_PROCESS) { ?>
            <i><?php esc_html_e('Creating Backup ...', 'duplicator-pro'); ?></i>
        <?php } else {
            $tplMng->render(
                'admin_pages/packages/row_parts/package_progress_error',
                [
                    'package' => $package,
                    'status'  => $status,
                ]
            );
        } ?>
    </td>
</tr>