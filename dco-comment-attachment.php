<?php
/**
 * DCO Comment Attachment
 *
 * @package DCO_Comment_Attachment
 * @author Denis Yanchevskiy
 * @copyright 2019
 * @license GPLv2+
 *
 * @since 1.0
 *
 * Plugin Name: DCO Comment Attachment
 * Description: Allows your visitors to attach files with their comments
 * Version: 1.0
 * Author: Denis Yanchevskiy
 * Author URI: http://denisco.pro
 * License: GPLv2 or later
 * Text Domain: dco-comment-attachment
 */

defined( 'ABSPATH' ) || die;

define( 'DCO_CA_URL', plugin_dir_url( __FILE__ ) );
define( 'DCO_CA_PATH', plugin_dir_path( __FILE__ ) );
define( 'DCO_CA_BASENAME', plugin_basename( __FILE__ ) );
define( 'DCO_CA_VERSION', '1.0' );

require_once DCO_CA_PATH . 'class-dco-ca.php';