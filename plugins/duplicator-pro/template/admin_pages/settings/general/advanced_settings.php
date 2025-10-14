<?php

/**
 * @package Duplicator
 */

use Duplicator\Models\ActivityLog\LogUtils;
use Duplicator\Models\DynamicGlobalEntity;

defined("ABSPATH") or die("");

/**
 * Variables
 *
 * @var Duplicator\Core\Controllers\ControllersManager $ctrlMng
 * @var Duplicator\Core\Views\TplMng $tplMng
 * @var array<string, mixed> $tplData
 */

$global          = DUP_PRO_Global_Entity::getInstance();
$dGlobal         = DynamicGlobalEntity::getInstance();
$retentionMonths = $dGlobal->getValInt('activity_log_retention', LogUtils::DEFAULT_RETENTION_MONTHS) / MONTH_IN_SECONDS;
?>

<div class="dup-accordion-wrapper display-separators close">
    <div class="accordion-header">
        <h3 class="title" id="advanced-section-header">
            <?php esc_html_e('Advanced', 'duplicator-pro') ?>
        </h3>
    </div>
    <div class="accordion-content">

        <label class="lbl-larger">
            <?php esc_html_e('Settings', 'duplicator-pro'); ?>
        </label>
        <div class="margin-bottom-1">
            <button
                id="dup-pro-reset-all"
                class="button secondary hollow small margin-0"
                onclick="DupPro.Pack.ConfirmResetAll(); return false">
                <i class="fas fa-redo fa-sm"></i> <?php esc_html_e('Reset All Settings', 'duplicator-pro'); ?>
            </button>
            <p class="description">
                <?php
                esc_html_e("Reset all settings to their defaults.", 'duplicator-pro');
                $tContent = __(
                    'Resets standard settings to defaults. Does not affect capabilities, license key, storage or schedules.',
                    'duplicator-pro'
                );
                ?>
                <i
                    class="fa-solid fa-question-circle fa-sm dark-gray-color"
                    data-tooltip-title="<?php esc_attr_e("Reset Settings", 'duplicator-pro'); ?>"
                    data-tooltip="<?php echo esc_attr($tContent); ?>">
                </i>
            </p>
        </div>

        <label class="lbl-larger">
            <?php esc_html_e("Foreign JavaScript", 'duplicator-pro'); ?>
        </label>
        <div class="margin-bottom-1">
            <input
                type="checkbox"
                name="_unhook_third_party_js"
                id="_unhook_third_party_js"
                value="1"
                class="margin-0"
                <?php checked($global->unhook_third_party_js); ?>>
            <label for="_unhook_third_party_js"><?php esc_html_e("Disable", 'duplicator-pro'); ?></label> <br />
            <p class="description">
                <?php
                esc_html_e("Check this option if JavaScript from the theme or other plugins conflicts with Duplicator Pro pages.", 'duplicator-pro');
                ?>
                <br>
                <?php
                esc_html_e("Do not modify this setting unless you know the expected result or have talked to support.", 'duplicator-pro');
                ?>
            </p>
        </div>

        <label class="lbl-larger">
            <?php esc_html_e("Foreign CSS", 'duplicator-pro'); ?>
        </label>
        <div class="margin-bottom-1">
            <input
                type="checkbox"
                name="_unhook_third_party_css"
                id="unhook_third_party_css"
                value="1"
                class="margin-0"
                <?php checked($global->unhook_third_party_css); ?>>
            <label for="unhook_third_party_css"><?php esc_html_e("Disable", 'duplicator-pro'); ?></label> <br />
            <p class="description">
                <?php
                esc_html_e("Check this option if CSS from the theme or other plugins conflicts with Duplicator Pro pages.", 'duplicator-pro');
                ?>
                <br>
                <?php
                esc_html_e("Do not modify this setting unless you know the expected result or have talked to support.", 'duplicator-pro');
                ?>
            </p>
        </div>

        <label class="lbl-larger">
            <?php esc_html_e("Activity Log Retention", 'duplicator-pro'); ?>
        </label>
        <div class="margin-bottom-1">
            <input
                type="number"
                class="width-small inline-display margin-0"
                name="activity_log_retention_months"
                id="activity_log_retention_months"
                value="<?php echo (int) $retentionMonths; ?>"
                min="0"
                step="1">
            &nbsp;<span class="inline-display"><?php esc_html_e("months", 'duplicator-pro'); ?></span>
            <p class="description">
                <?php
                esc_html_e("Set how many months to keep activity log entries. Enter 0 to keep all logs permanently.", 'duplicator-pro');
                ?>
                <br>
                <?php
                esc_html_e("Activity logs older than the specified number of months will be automatically deleted.", 'duplicator-pro');
                ?>
            </p>
        </div>
    </div>
</div>