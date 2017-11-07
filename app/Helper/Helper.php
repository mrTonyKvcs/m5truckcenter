<?php
if ( !function_exists('active_menu')) 
{
	function active_menu($currentRouteName, $requestName) {
		if ( $currentRouteName == $requestName) {
			return 'active';
		}
		else {
			return null;
		}
	}
}