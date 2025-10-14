<?php

namespace Duplicator\Models\Storages;

use Duplicator\Libs\Snap\SnapIO;

abstract class AbstractStorageAdapter
{
    const MAX_CACHE_SIZE = 1000;

    /**
     * The realCopyToStorage method is implemented
     *
     * @var string
     */
    const METHODS_UPLOAD = 'upload';

    /**
     * The copyFromStorage method is implemented
     *
     * @var string
     */
    const METHODS_DOWNLOAD = 'download';

    /**
     * The realGetPathInfo method is implemented
     *
     * @var string
     */
    const METHODS_INFO = 'info';

    /**
     * The scanDir, isDir empty methods are implemented
     *
     * @var string
     */
    const METHODS_LIST = 'list';

    /**
     * The realCreateFile, realCreateDir methods are implemented
     *
     * @var string
     */
    const METHODS_CREATE = 'create';

    /**
     * The realDelete method is implemented
     *
     * @var string
     */
    const METHODS_DELETE = 'delete';

    /**
     * The realMove method is implemented
     *
     * @var string
     */
    const METHODS_MOVE = 'move';

    /**
     * The getFileContent method is implemented
     *
     * @var string
     */
    const METHODS_READ = 'read';

    /** @var array<string,StoragePathInfo> */
    private $infosCache = [];


    /**
     * Returns the available methods for the storage adapter.
     *
     * @return string[]
     */
    protected function availableMethods(): array
    {
        // By default all methods are available
        return [
            self::METHODS_UPLOAD,
            self::METHODS_DOWNLOAD,
            self::METHODS_INFO,
            self::METHODS_LIST,
            self::METHODS_CREATE,
            self::METHODS_DELETE,
            self::METHODS_MOVE,
            self::METHODS_READ,
        ];
    }

    /**
     * Check if method is available for the storage adapter.
     *
     * @param string|string[] $methods The methods to check
     *
     * @return bool
     */
    public function areMethodsAvailable($methods): bool
    {
        if (is_scalar($methods)) {
            return in_array($methods, $this->availableMethods());
        }

        return count(array_intersect($this->availableMethods(), $methods)) === count($methods);
    }

    /**
     * Add cache info
     *
     * @param string          $path archive item path
     * @param StoragePathInfo $info archive item info
     *
     * @return void
     */
    private function addCacheInfo(string $path, StoragePathInfo $info): void
    {
        $path = self::normalizePath($path);
        // Remove old cache if exists to put new cache at the end of array
        $this->removeCacheInfo($path);
        $this->infosCache[$path] = $info;
        if (count($this->infosCache) > self::MAX_CACHE_SIZE) {
            array_shift($this->infosCache);
        }
    }

    /**
     * Remove cache info by path
     *
     * @param string $path archive item path
     *
     * @return void
     */
    private function removeCacheInfo(string $path): void
    {
        $path = self::normalizePath($path);
        unset($this->infosCache[$path]);
    }

    /**
     * Get cache info
     *
     * @param string $path archive item path
     *
     * @return ?StoragePathInfo
     */
    private function getCacheInfo(string $path): ?StoragePathInfo
    {
        $path = self::normalizePath($path);
        return $this->infosCache[$path] ?? null;
    }

    /**
     * Add nested dir info to cache
     *
     * @param string $path archive item path
     *
     * @return void
     */
    private function addNestedCreatedDirInfo(string $path): void
    {
        $path = SnapIO::normalizePath($path);
        $path = ltrim(SnapIO::untrailingslashit($path), '/');
        if ($path === '' || $path === '.' || $path === '..') {
            return;
        }
        $this->addCacheInfo($path, $this->generateCreateDirInfo($path));
        if (($pos = strrpos($path, '/')) !== false) {
            $this->addNestedCreatedDirInfo(substr($path, 0, $pos));
        }
    }

    /**
     * Get list of cached paths
     *
     * @param bool $exists If true, return only existing paths, if false return all cached paths
     * @param bool $dirs   If true, return directories, if false exclude directories
     * @param bool $files  If true, return files, if false exclude files
     *
     * @return string[]
     */
    protected function getCachedPaths(bool $exists = true, bool $dirs = true, bool $files = true): array
    {
        $paths = [];
        foreach ($this->infosCache as $path => $info) {
            if ($exists && !$info->exists) {
                continue;
            }
            if ($dirs && !$info->isDir) {
                continue;
            }
            if ($files && $info->isDir) {
                continue;
            }
            $paths[] = $path;
        }
        return $paths;
    }

    /**
     * Get list of cache childs of relative path
     *
     * @param string $path   Relative storage path to check
     * @param bool   $exists If true, return only existing paths, if false return all cached paths
     * @param bool   $dirs   If true, return directories, if false exclude directories
     * @param bool   $files  If true, return files, if false exclude files
     *
     * @return string[]
     */
    protected function getCachedChilds(string $path, bool $exists = true, bool $dirs = true, bool $files = true): array
    {
        $path        = '/' . self::normalizePath($path);
        $cachedPaths = [];
        foreach ($this->infosCache as $cachedPath => $info) {
            if ($exists && !$info->exists) {
                continue;
            }
            if ($dirs && !$info->isDir) {
                continue;
            }
            if ($files && $info->isDir) {
                continue;
            }
            if (!SnapIO::isChildPath('/' . $cachedPath, $path, false, false)) {
                continue;
            }
            $cachedPaths[] = $cachedPath;
        }
        return $cachedPaths;
    }

    /**
     * Generate info on create dir, this method is extendable by child classes if StoragePathInfo is extended.
     *
     * @param string $path Dir path
     *
     * @return StoragePathInfo
     */
    protected function generateCreateDirInfo(string $path): StoragePathInfo
    {
        $info           = new StoragePathInfo();
        $info->path     = $path;
        $info->exists   = true;
        $info->isDir    = true;
        $info->size     = 0;
        $info->created  = time();
        $info->modified = time();
        return $info;
    }

    /**
     * Generate info on delete item, this method is extendable by child classes if StoragePathInfo is extended.
     *
     * @param string $path Item path
     *
     * @return StoragePathInfo
     */
    protected function generateDeleteInfo(string $path): StoragePathInfo
    {
        $info           = new StoragePathInfo();
        $info->path     = $path;
        $info->exists   = false;
        $info->isDir    = false;
        $info->size     = 0;
        $info->created  = 0;
        $info->modified = 0;
        return $info;
    }

    /**
     * Initialize the storage on creation.
     *
     * @param string $errorMsg The error message if storage is invalid.
     *
     * @return bool true on success or false on failure.
     */
    abstract public function initialize(&$errorMsg = ''): bool;

    /**
     * Destroy the storage on deletion.
     *
     * @return bool true on success or false on failure.
     */
    abstract public function destroy(): bool;

    /**
     * Check if storage is valid and ready to use.
     *
     * @param ?string $errorMsg The error message if storage is invalid.
     *
     * @return bool
     */
    abstract public function isValid(?string &$errorMsg = ''): bool;

    /**
     * Get file content.
     *
     * @param string $path The path to file.
     *
     * @return string|false The content of file or false on failure.
     */
    abstract public function getFileContent(string $path);

    /**
     * Get the list of files and directories inside the specified path.
     *
     * @param string $path    Relative storage path, if empty, scan root path.
     * @param bool   $files   If true, add files to the list. Default to true.
     * @param bool   $folders If true, add folders to the list. Default to true.
     *
     * @return string[] The list of files and directories, empty array if path is invalid.
     */
    abstract public function scanDir(string $path, bool $files = true, bool $folders = true): array;

    /**
     * Check if directory is empty.
     *
     * @param string   $path    The folder path
     * @param string[] $filters Filters to exclude files and folders from the check, if start and end with /, use regex.
     *
     * @return bool True is ok, false otherwise
     */
    abstract public function isDirEmpty(string $path, array $filters = []): bool;

    /**
     * Get path info and cache it, is path not exists return path info with exists property set to false.
     *
     * @param string $path Relative storage path, if empty, return root path info.
     *
     * @return StoragePathInfo|false The path info or false on error.
     */
    final public function getPathInfo(string $path)
    {
        $path = self::normalizePath($path);
        if (($cache = $this->getCacheInfo($path)) !== null) {
            return $cache;
        }

        $info = $this->getRealPathInfo($path);

        if ($info instanceof StoragePathInfo) {
            // Cache only if valid info
            $this->addCacheInfo($path, $info);
        }

        return $info;
    }

    /**
     * Normalize path, remove trailing slashes and convert slashes to system separator.
     *
     * @param string $path Path to normalize
     *
     * @return string Normalized path
     */
    private static function normalizePath(string $path): string
    {
        $path = ltrim(SnapIO::safePathUntrailingslashit($path), '/');
        if (in_array($path, ['', '.', '..'])) {
            $path = '';
        }
        return $path;
    }

    /**
     * Get path info and cache it, is path not exists return path info with exists property set to false.
     *
     * @param string $path Relative storage path, if empty, return root path info.
     *
     * @return StoragePathInfo|false The path info or false on error.
     */
    abstract protected function getRealPathInfo(string $path);

    /**
     * Path dir or file exists.
     *
     * @param string $path The path to check. If empty, check root path.
     *
     * @return bool
     */
    final public function exists(string $path): bool
    {
        $info = $this->getPathInfo($path);
        return ($info instanceof StoragePathInfo && $info->exists);
    }

    /**
     * Check if path exists and is a file.
     *
     * @param string $path The path to check.
     *
     * @return bool
     */
    final public function isFile(string $path): bool
    {
        $info = $this->getPathInfo($path);
        return ($info instanceof StoragePathInfo && $info->exists && !$info->isDir);
    }

    /**
     * Get file size.
     *
     * @param string $path The path to check.
     *
     * @return int|false The file size or false if path not exists or is not a file.
     */
    final public function fileSize(string $path)
    {
        $info = $this->getPathInfo($path);
        return ($info instanceof StoragePathInfo && $info->exists && !$info->isDir) ? $info->size : false;
    }

    /**
     * Check if path exists and is a directory.
     *
     * @param string $path The path to check. If empty, check root path.
     *
     * @return bool
     */
    final public function isDir(string $path): bool
    {
        $info = $this->getPathInfo($path);
        return ($info instanceof StoragePathInfo && $info->exists && $info->isDir);
    }

    /**
     * Delete reletative path from storage root.
     * Delete item isn't removed from cache, but cache info is updated.
     *
     * @param string $path      The path to delete. (Accepts directories and files)
     * @param bool   $recursive Allows the deletion of nested directories specified in the pathname. Default to false.
     *
     * @return bool true on success or false on failure.
     */
    final public function delete(string $path, bool $recursive = false): bool
    {
        if (($result = $this->realDelete($path, $recursive)) === true) {
            if ($recursive) {
                foreach ($this->infosCache as $cachePath => $cacheInfo) {
                    if (SnapIO::isChildPath($cachePath, $path, false, false)) {
                        $this->addCacheInfo($cachePath, $this->generateDeleteInfo($cachePath));
                    }
                }
            }
            $this->addCacheInfo($path, $this->generateDeleteInfo($path));
        }
        return $result;
    }

    /**
     * Delete relative path from storage root.
     *
     * @param string $path      The path to delete. (Accepts directories and files)
     * @param bool   $recursive Allows the deletion of nested directories specified in the pathname. Default to false.
     *
     * @return bool true on success or false on failure.
     */
    abstract protected function realDelete(string $path, bool $recursive = false): bool;

    /**
     * Create the directory specified by pathname, recursively if necessary.
     *
     * @param string $path The directory path.
     *
     * @return bool true on success or false on failure.
     */
    final public function createDir(string $path): bool
    {
        if (($result = $this->realCreateDir($path)) === true) {
            $this->addNestedCreatedDirInfo(dirname($path));
            $this->addCacheInfo($path, $this->generateCreateDirInfo($path));
        }
        return $result;
    }

    /**
     * Create the directory specified by pathname, recursively if necessary.
     *
     * @param string $path The directory path.
     *
     * @return bool true on success or false on failure.
     */
    abstract protected function realCreateDir(string $path): bool;

    /**
     * Create file with content.
     *
     * @param string $path    The path to file.
     * @param string $content The content of file.
     *
     * @return false|int The number of bytes that were written to the file, or false on failure.
     */
    final public function createFile(string $path, string $content)
    {
        if (($result = $this->realCreateFile($path, $content)) !== false) {
            $this->addNestedCreatedDirInfo(dirname($path));
            $this->removeCacheInfo($path);
        }
        return $result;
    }

    /**
     * Create file with content.
     *
     * @param string $path    The path to file.
     * @param string $content The content of file.
     *
     * @return false|int The number of bytes that were written to the file, or false on failure.
     */
    abstract protected function realCreateFile(string $path, string $content);

    /**
     * Move and/or rename a file or directory.
     *
     * @param string $oldPath Relative storage path
     * @param string $newPath Relative storage path
     *
     * @return bool true on success or false on failure.
     */
    final public function move(string $oldPath, string $newPath): bool
    {
        $moveDir = $this->isDir($oldPath);
        if (($result = $this->realMove($oldPath, $newPath)) === true) {
            $this->addCacheInfo($oldPath, $this->generateDeleteInfo($oldPath));
            if ($moveDir) {
                $this->addCacheInfo($newPath, $this->generateCreateDirInfo($newPath));
            } else {
                $this->removeCacheInfo($oldPath);
            }
        }
        return $result;
    }

    /**
     * Move and/or rename a file or directory.
     *
     * @param string $oldPath Relative storage path
     * @param string $newPath Relative storage path
     *
     * @return bool true on success or false on failure.
     */
    abstract protected function realMove(string $oldPath, string $newPath): bool;

    /**
     * Copy local file to storage, partial copy is supported.
     * If destination file exists, it will be overwritten.
     *
     * @param string              $sourceFile  The source file full path
     * @param string              $storageFile Storage destination path
     * @param int<0,max>          $offset      The offset where the data starts.
     * @param int                 $length      The maximum number of bytes read. Default to -1 (read all the remaining buffer).
     * @param int                 $timeout     The timeout for the copy operation in microseconds. Default to 0 (no timeout).
     * @param array<string,mixed> $extraData   Extra data to pass to copy function and updated during copy.
     *                                         Used for storages that need to maintain persistent data during copy intra-session.
     *
     * @return false|int The number of bytes that were written to the file, or false on failure.
     */
    public function copyToStorage(
        string $sourceFile,
        string $storageFile,
        int $offset = 0,
        int $length = -1,
        int $timeout = 0,
        array &$extraData = []
    ) {
        if (($result = $this->realCopyToStorage($sourceFile, $storageFile, $offset, $length, $timeout, $extraData)) !== false) {
            if ($offset === 0) {
                // Remove cache at beginning of copy
                $this->removeCacheInfo($storageFile);
            }
            if (($offset + $result) >= filesize($sourceFile)) {
                // Validate file size at end of copy
                $this->removeCacheInfo($storageFile);
                if (
                    $this->areMethodsAvailable(self::METHODS_INFO) &&
                    (
                        $this->fileSize($storageFile) === false ||
                        $this->fileSize($storageFile) !== filesize($sourceFile)
                    )
                ) {
                    $result = false;
                }
            }
        }
        return $result;
    }

    /**
     * Copy local file to storage, partial copy is supported.
     * If destination file exists, it will be overwritten.
     * If offset is less than the destination file size, the file will be truncated.
     *
     * @param string              $sourceFile  The source file full path
     * @param string              $storageFile Storage destination path
     * @param int<0,max>          $offset      The offset where the data starts.
     * @param int                 $length      The maximum number of bytes read. Default to -1 (read all the remaining buffer).
     * @param int                 $timeout     The timeout for the copy operation in microseconds. Default to 0 (no timeout).
     * @param array<string,mixed> $extraData   Extra data to pass to copy function and updated during copy.
     *                                         Used for storages that need to maintain persistent data during copy intra-session.
     *
     * @return false|int The number of bytes that were written to the file, or false on failure.
     */
    abstract protected function realCopyToStorage(
        string $sourceFile,
        string $storageFile,
        int $offset = 0,
        int $length = -1,
        int $timeout = 0,
        array &$extraData = []
    );
    /**
     * Copy storage file to local file, partial copy is supported.
     * If destination file exists, it will be overwritten.
     * If offset is less than the destination file size, the file will be truncated.
     *
     * @param string              $storageFile The storage file path
     * @param string              $destFile    The destination local file full path
     * @param int<0,max>          $offset      The offset where the data starts.
     * @param int                 $length      The maximum number of bytes read. Default to -1 (read all the remaining buffer).
     * @param int                 $timeout     The timeout for the copy operation in microseconds. Default to 0 (no timeout).
     * @param array<string,mixed> $extraData   Extra data to pass to copy function and updated during copy.
     *                                         Used for storages that need to maintain persistent data during copy intra-session.
     *
     * @return false|int The number of bytes that were written to the file, or false on failure.
     */
    abstract public function copyFromStorage(
        string $storageFile,
        string $destFile,
        int $offset = 0,
        int $length = -1,
        int $timeout = 0,
        array &$extraData = []
    );
}
