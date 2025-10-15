<?php
/**
 * Plugin Name: Local Purge Bypass
 * Description: Prevents Endurance Page Cache from issuing PURGE requests against the local stack where the method is unsupported.
 * Author: Audit Automation
 *
 * This prevents noisy Apache errors and lets file-based caching operate normally.
 */

if ( ! defined( 'WPINC' ) ) {
	exit;
}

add_filter(
	'pre_http_request',
	static function ( $preempt, $args, $url ) {
		$method = isset( $args['method'] ) ? strtoupper( $args['method'] ) : '';

		if ( 'PURGE' !== $method ) {
			return $preempt;
		}

		$home_host = wp_parse_url( home_url(), PHP_URL_HOST );
		$request_host = wp_parse_url( $url, PHP_URL_HOST );

		// Only bypass when running on local URLs to avoid muting purge traffic in production.
		$local_hosts = array_filter(
			array(
				$home_host,
				'localhost',
				'127.0.0.1',
			)
		);

		if ( ! in_array( $request_host, $local_hosts, true ) ) {
			return $preempt;
		}

		return array(
			'headers'  => array(),
			'body'     => '',
			'response' => array(
				'code'    => 200,
				'message' => 'OK',
			),
			'cookies'  => array(),
			'filename' => null,
		);
	},
	10,
	3
);
