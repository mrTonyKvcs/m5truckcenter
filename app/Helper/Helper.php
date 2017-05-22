<?php
if ( !function_exists('active_menu')) 
{
	function active_menu($currentRouteName, $requestName) {
		if ( substr($currentRouteName, 0) == $requestName) {
			return 'active';
		}
		else {
			return null;
		}
	}
}