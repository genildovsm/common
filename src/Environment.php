<?php

namespace GenildoMartins\Common;

class Environment 
{
	/**
	 * @param string $dir [Absolute path to file ".env"]
	 * @return  void
	 */
	public static function load(string $dir='__DIR__'):void
	{
		// Check if the file exists
		if (!file_exists($dir.'/.env')) return false;

		// Set the environment variables
		$lines = file($dir.'/.env');
		
		foreach ($lines as $line){
			putenv(trim($line));
		}
	}

}
