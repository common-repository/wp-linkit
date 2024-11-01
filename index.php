<?php /*
Plugin Name: LinkIt ( DISCONTINUED )
Plugin URI: http://wplinkit.dcoda.co.uk/
Description: Link Insertion tool
Author: dcoda
Author URI: 
Version: DISCONTINUED
License: GPLv2 or later
*/
@require_once  dirname ( __FILE__ ) . '/library/wordpress/application.php';
if (class_exists("wv43v_application"))
{
	new wv43v_application ( __FILE__);
}