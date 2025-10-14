<?php

/**
 * Activity Log list template
 *
 * @package   Duplicator
 * @copyright (c) 2024, Snap Creek LLC
 */

use Duplicator\Ajax\ServicesActivityLog;
use Duplicator\Models\ActivityLog\AbstractLogEvent;

defined("ABSPATH") or die("");

/**
 * Variables
 *
 * @var \Duplicator\Core\Controllers\ControllersManager $ctrlMng
 * @var \Duplicator\Core\Views\TplMng  $tplMng
 */

$page       = $tplMng->getDataValueIntRequired('page');
$perPage    = $tplMng->getDataValueIntRequired('perPage');
$totalItems = $tplMng->getDataValueIntRequired('totalItems');
$totalPages = $tplMng->getDataValueIntRequired('totalPages');
$logTypes   = $tplMng->getDataValueArrayRequired('logTypes');
/** @var array<AbstractLogEvent> */
$logs = $tplMng->getDataValueArrayRequired('logs');

?>

<div class="wrap">
    <?php $tplMng->render('admin_pages/activity_log/parts/toolbar'); ?>

    <table class="widefat dup-table-list striped dup-activity-log-table">
        <thead>
            <tr>
                <th scope="col" class="manage-column column-date"><?php esc_html_e('Date', 'duplicator-pro'); ?></th>
                <th scope="col" class="manage-column column-severity"><?php esc_html_e('Severity', 'duplicator-pro'); ?></th>
                <th scope="col" class="manage-column column-type"><?php esc_html_e('Type', 'duplicator-pro'); ?></th>
                <th scope="col" class="manage-column column-title"><?php esc_html_e('Title', 'duplicator-pro'); ?></th>
                <th scope="col" class="manage-column column-description"><?php esc_html_e('Description', 'duplicator-pro'); ?></th>
                <th scope="col" class="manage-column column-actions"><?php esc_html_e('Actions', 'duplicator-pro'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($logs)) : ?>
                <tr>
                    <td colspan="6" class="no-items">
                        <?php esc_html_e('No activity logs found.', 'duplicator-pro'); ?>
                    </td>
                </tr>
            <?php else : ?>
                <?php foreach ($logs as $log) : ?>
                    <?php
                    $tplMng->render('admin_pages/activity_log/parts/table_row', ['log' => $log]);
                    ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
        <tfoot>
            <tr>
                <th scope="col" class="manage-column column-date"><?php esc_html_e('Date', 'duplicator-pro'); ?></th>
                <th scope="col" class="manage-column column-severity"><?php esc_html_e('Severity', 'duplicator-pro'); ?></th>
                <th scope="col" class="manage-column column-type"><?php esc_html_e('Type', 'duplicator-pro'); ?></th>
                <th scope="col" class="manage-column column-title"><?php esc_html_e('Title', 'duplicator-pro'); ?></th>
                <th scope="col" class="manage-column column-description"><?php esc_html_e('Description', 'duplicator-pro'); ?></th>
                <th scope="col" class="manage-column column-actions"><?php esc_html_e('Actions', 'duplicator-pro'); ?></th>
            </tr>
        </tfoot>
    </table>
</div>
<script>
    jQuery(document).ready(function($) {

        DupPro.ActivityLog = {
            modalBox: null,
            init: function() {
                this.modalBox = new DuplicatorModalBox();
                this.initEvents();
            },
            initEvents: function() {
                $(document).on('click', '.dup-log-view-btn', function() {
                    const logId = $(this).data('log-id');
                    DupPro.ActivityLog.openDetail(logId);
                });
            },
            openDetail: function(logId) {
                if (this.modalBox) {
                    this.modalBox.close();
                }

                Duplicator.Util.ajaxWrapper({
                        'action': '<?php echo esc_js(ServicesActivityLog::NONCE_GET_DETAIL); ?>',
                        'nonce': '<?php echo esc_js(wp_create_nonce(ServicesActivityLog::NONCE_GET_DETAIL)); ?>',
                        'log_id': logId
                    },
                    function(result, data, funcData) {
                        if (funcData.success) {
                            DupPro.ActivityLog.modalBox.setOptions({
                                htmlContent: funcData.html,
                                closeInContent: true,
                                closeColor: '#000'
                            });
                            DupPro.ActivityLog.modalBox.open();
                        } else {
                            DupPro.addAdminMessage(funcData.message, 'error');
                        }
                    }
                );
            },
        };

        DupPro.ActivityLog.init();
    });
</script>