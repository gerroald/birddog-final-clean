<?php

namespace Duplicator\Package;

use DUP_PRO_Log;
use DUP_PRO_Package;
use Duplicator\Models\TemplateEntity;
use Duplicator\Models\Storages\AbstractStorageEntity;
use Duplicator\Models\Storages\StoragesUtil;
use InvalidArgumentException;
use ReflectionClass;
use RuntimeException;
use ReflectionObject;

class TemporaryPackageUtils
{
    /**
     * Set package as temporary using reflection
     *
     * @param AbstractPackage $package Package to set as temporary
     *
     * @return void
     */
    protected static function setTemporaryFlag(AbstractPackage $package): void
    {
        $reflect       = new ReflectionObject($package);
        $flagsProperty = $reflect->getProperty('flags');
        $flagsProperty->setAccessible(true);
        $flags = $flagsProperty->getValue($package);
        if (!in_array(AbstractPackage::FLAG_TEMPORARY, $flags)) {
            $flags[] = AbstractPackage::FLAG_TEMPORARY;
            $flagsProperty->setValue($package, $flags);
        }
    }

    /**
     * Remove temporary flag using reflection
     *
     * @param AbstractPackage $package Package to remove temporary flag from
     *
     * @return void
     */
    protected static function removeTemporaryFlag(AbstractPackage $package): void
    {
        $reflect       = new ReflectionObject($package);
        $flagsProperty = $reflect->getProperty('flags');
        $flagsProperty->setAccessible(true);
        $flags = $flagsProperty->getValue($package);
        $flags = array_values(array_diff($flags, [AbstractPackage::FLAG_TEMPORARY]));
        $flagsProperty->setValue($package, $flags);
    }

    /**
     * Create temporary package from class name
     *
     * @param int   $templateId Template ID, if -1 use manual template
     * @param int[] $storageIds Array of storage IDs
     *
     * @return DUP_PRO_Package
     */
    public static function createTemporaryPackage($templateId = -1, $storageIds = []): DUP_PRO_Package
    {
        if ($templateId === -1) {
            $template = TemplateEntity::getManualTemplate();
        } else {
            if (($template = TemplateEntity::getById($templateId)) === null) {
                throw new InvalidArgumentException("Template with id {$templateId} not found");
            }
        }

        if (count($storageIds) === 0) {
            $storageIds = [StoragesUtil::getDefaultStorageId()];
        }

        foreach ($storageIds as $storageId) {
            $storage = AbstractStorageEntity::getById($storageId);
            if ($storage === false) {
                throw new InvalidArgumentException("Storage with id {$storageId} not found");
            }
        }

        self::deleteTemporaryPackage();
        $package = new DUP_PRO_Package(DUP_PRO_Package::EXEC_TYPE_MANUAL, $storageIds, $template);
        self::setTemporaryFlag($package);

        if ($package->save() === false) {
            throw new RuntimeException('Failed to save temporary package');
        }
        DUP_PRO_Log::trace('CREATE TEMPORARY PACKAGE: Saved temporary package; id: ' . $package->getID());

        return $package;
    }

    /**
     *  Remove all temporary packages
     *
     * @return void
     */
    public static function deleteTemporaryPackage(): void
    {
        /** @var \wpdb $wpdb */
        global $wpdb;

        $table = AbstractPackage::getTableName();
        $wpdb->query(
            $wpdb->prepare(
                "DELETE FROM `{$table}` WHERE FIND_IN_SET(%s, flags)",
                AbstractPackage::FLAG_TEMPORARY
            )
        );
    }

    /**
     * Gets the temporary package. The temporary package is defined as the first package with FLAG_TEMPORARY flag.
     *
     * @return DUP_PRO_Package Return temporary package
     */
    public static function getTemporaryPackage(): DUP_PRO_Package
    {
        $package = null;
        $where   = 'FIND_IN_SET(\'' . AbstractPackage::FLAG_TEMPORARY . '\', `flags`)';
        $ids     = DUP_PRO_Package::dbSelect(
            $where,
            1,
            0,
            '',
            'ids',
            [
                DUP_PRO_Package::getBackupType(),
            ],
            true
        );

        if (count($ids) == 1) {
            $package = DUP_PRO_Package::getById($ids[0]);
        }

        if (empty($package)) {
            DUP_PRO_Log::trace('GET TEMPORARY PACKAGE: Creating new temporary package because no package was found; count: ' . count($ids));
            $package = new DUP_PRO_Package();
            self::setTemporaryFlag($package);
        }

        return $package;
    }

    /**
     * Create a new package from the temporary package
     *
     * @return DUP_PRO_Package
     */
    public static function createPackageFromTemporaryPackage(): DUP_PRO_Package
    {
        $tmpPackage = self::getTemporaryPackage();
        $package    = clone $tmpPackage;

        // Set ID using reflection
        $reflection = new ReflectionClass($package);
        $idProperty = $reflection->getProperty('ID');
        $idProperty->setAccessible(true);
        $idProperty->setValue($package, -1);

        self::removeTemporaryFlag($package);
        if (!$package->save()) {
            throw new RuntimeException('Failed to save new package from temporary package');
        }
        return $package;
    }
}
