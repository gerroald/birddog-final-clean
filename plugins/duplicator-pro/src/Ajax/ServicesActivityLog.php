<?php

/**
 * @package   Duplicator
 * @copyright (c) 2024, Snap Creek LLC
 */

namespace Duplicator\Ajax;

use Duplicator\Core\CapMng;
use Duplicator\Core\Views\TplMng;
use Duplicator\Libs\Snap\SnapUtil;
use Duplicator\Models\ActivityLog\AbstractLogEvent;
use Exception;

/**
 * Activity Log AJAX services
 */
class ServicesActivityLog extends AbstractAjaxService
{
    const NONCE_GET_DETAIL = 'duplicator_activity_log_get_detail';

    /**
     * Init ajax calls
     *
     * @return void
     */
    public function init(): void
    {
        $this->addAjaxCall('wp_ajax_duplicator_activity_log_get_detail', 'getLogDetail');
        $this->addAjaxCall('wp_ajax_duplicator_activity_log_delete', 'deleteLog');
    }

    /**
     * Get log detail HTML via AJAX
     *
     * @return void
     */
    public function getLogDetail(): void
    {
        AjaxWrapper::json(
            [
                self::class,
                'getLogDetailCallback',
            ],
            self::NONCE_GET_DETAIL,
            SnapUtil::sanitizeTextInput(SnapUtil::INPUT_REQUEST, 'nonce'),
            CapMng::CAP_BASIC
        );
    }

    /**
     * Get log detail HTML callback
     *
     * @return array{html: string, success: bool, message: string}
     */
    public static function getLogDetailCallback(): array
    {
        try {
            $logId = SnapUtil::sanitizeIntInput(SnapUtil::INPUT_REQUEST, 'log_id', -1);

            if ($logId <= 0) {
                throw new Exception(__('Invalid log ID', 'duplicator-pro'));
            }

            $log = AbstractLogEvent::getById($logId);

            if ($log === false) {
                throw new Exception(__('Log not found', 'duplicator-pro'));
            }

            // Check if user has capability to view this log
            if (!CapMng::can($log::getCapability(), false)) {
                throw new Exception(__('You do not have permission to view this log', 'duplicator-pro'));
            }

            // Generate HTML using template
            $html = TplMng::getInstance()->render(
                'admin_pages/activity_log/log_detail_modal',
                ['log' => $log],
                false
            );

            return [
                'html'    => $html,
                'success' => true,
                'message' => '',
            ];
        } catch (Exception $e) {
            return [
                'html'    => '',
                'success' => false,
                'message' => sprintf(__('Error loading log: %s', 'duplicator-pro'), $e->getMessage()),
            ];
        }
    }
}
