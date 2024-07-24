<?php
/**
 * Plugin Name: Site Kit by Google – IPv6 Support Helper
 * Description: Helper plugin for sites impacted by IPv6 connection issues.
 * Author: Evan Mattson
 * Version: 0.2
 */

add_action(
	'plugins_loaded',
	function () {
		if ( ! defined( 'GOOGLESITEKIT_VERSION' ) ) {
			return;
		}


		add_action(
			'requests-requests.before_request',
			function ( $url, $headers, $data, $type, $options ) {
				if ( 0 === strpos( $url, 'https://sitekit.withgoogle.com' ) ) {
					$options['hooks']->register( 'curl.before_send', function ( $ch ) {
						curl_setopt( $ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
					} );
				}
			},
			10,
			5
		);

		add_filter(
			'googlesitekit_force_ip_resolve',
			function () {
				return 'v4';
			}
		);

	}
);
