<?php
namespace App\Helpers;

/**
* 
*/
class JResponse
{
	
	public static function error($data='')
	{
		return array('stat'=> 'error' , "message" => $data);
	}

	public static function data($data='')
	{
		if($data){
			return array('stat'=> 'ok', "data" => $data);
		}else{
			return array('stat'=> 'ok');
		}
		
	}
}