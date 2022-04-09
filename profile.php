<?php 

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
