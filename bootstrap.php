<?php
/*
Plugin Name: WebPay Simple Checkout
Plugin URI: https://github.com/masakielastic/webpay-wordpress
Description: Add WebPay Checkout forms using shortcodes.
Version: 0.1
Author: Masaki Kagaya
Author URI:  https://github.com/masakielastic
License: GPLv2 or later
Text Domain: webpay-checkout
Domain Path: /languages
*/

register_deactivation_hook( __FILE__, 'webpay_checkout_deactivate' );

function webpay_checkout_deactivate() {
	delete_option( 'webpay-checkout-settings' );
}