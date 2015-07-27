<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('test_method'))
{
	function get_view_path($view_name)
		{
		    $target_file=APPPATH.'views/front/'.$view_name.'.php';
		    if(file_exists($target_file)) return $target_file;
		}
}

?>