<?php
/**
 * Plugin Name: Ds Social Author Box
 * Plugin URI:        https://dsonlinegroup.com
 * Description:       Description of the plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Robiul Ds
 * Author URI:        https://dsonlinegroup.com
 * Text Domain:       dsrobi
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        
 */
 /**
 * Copyright (c) 2014 Tareq Hasan (email: tareq@wedevs.com). All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 * **********************************************************************
 */
 
    if ( !defined( 'ABSPATH' )) exit;
	
function ds_user_admin_area_field( $methods){
	$methods ['facebook'] = __('Facebook','dsrobi');
	$methods ['twitter']  = __('Twiter','dsrobi');
	$methods ['linkedin'] = __('LinkedIn','dsrobi');
	$methods ['youtube'] = __('Youtube','dsrobi');
	$methods ['github'] = __('GitHub','dsrobi');
	$methods ['instagram'] = __('Instagram','dsrobi');
	$methods ['tiktok'] = __('TikTok','dsrobi');
	$methods ['pinterest'] = __('Pinterest','dsrobi');
	$methods ['snapchat'] = __('Snapchat','dsrobi');
	$methods ['other'] = __('Othere','dsrobi');
	return $methods;	
	
}
add_filter('user_contactmethods', 'ds_user_admin_area_field',);
		
