<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 * @package     	Loitd_com
 * @subpackage  	Helpers
 * @category    	Helpers
 * @author          Tran Duc Loi
 * @version         1.0
 * @copyright       Copyright (c) Loitd.com
 */
if (!function_exists('getUpOrDownArrow')){
	function getUpOrDownArrow($today = 0, $yesterday = 0){
		if($today == $yesterday){
			return "icon-minus";
		} else if($today < $yesterday){
			return "icon-arrow-down";    		
		} else {
			return "icon-arrow-up";
		}
	}
}
