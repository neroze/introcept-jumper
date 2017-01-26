<?php
namespace App\Helpers;
/**
 * Wrapper for Logentries Class
 *
 * @package Jlog 
 * @author Jumper
 **/
require 'le_php-master/logentries.php';
$GLOBALS['log'] = $log;
//$log->Info("Init test");

class Jlog
{
	public $log;
	public function __construct()
	{
		$this->log =  $GLOBALS['log'];
	}
	/**
	 * Log info
	 *
	 * @param String $msg Message to set info log
	 * @author 
	 **/
	public function info($msg='')
	{	
		if($msg != ""){
			$this->log->Info($msg);
		}
	}
	/**
	 * Log Debug
	 *
	 * @param String $msg Message to set Debugging log
	 * @author 
	 **/
	public function debug($msg='')
	{	
		if($msg != ""){
			$this->log->Debug($msg);
		}
	}
	/**
	 * Log Notice
	 *
	 * @param String $msg Message to set Notice log
	 * @author 
	 **/
	public function notice($msg='')
	{	
		if($msg != ""){
			$this->log->Notice($msg);
		}
	}
	/**
	 * Log Notice
	 *
	 * @param String $msg Message to set Warn log
	 * @author 
	 **/
	public function warn($msg='')
	{	
		if($msg != ""){
			$this->log->Warn($msg);
		}
	}

	/**
	 * Log Notice
	 *
	 * @param String $msg Message to set Crit log
	 * @author 
	 **/
	public function crit($msg='')
	{	
		if($msg != ""){
			$this->log->Crit($msg);
		}
	}

	/**
	 * Log Error
	 *
	 * @param String $msg Message to set Error log
	 * @author 
	 **/
	public function error($msg='')
	{	
		if($msg != ""){
			$this->log->Error($msg);
		}
	}
	/**
	 * Log Alert
	 *
	 * @param String $msg Message to set Alert log
	 * @author 
	 **/
	public function alert($msg='')
	{	
		if($msg != ""){
			$this->log->Alert($msg);
		}
	}
	/**
	 * Log Emerg
	 *
	 * @param String $msg Message to set Emerg log
	 * @author 
	 **/
	public function emerg($msg='')
	{	
		if($msg != ""){
			$this->log->Emerg($msg);
		}
	}

} // END class 