<?php
if (!function_exists('simon_auth_config')) 
{
	function simon_auth_config($key = null,$default = null)
	{
		$Filesystem = new \Illuminate\Filesystem\Filesystem();
		$path = dirname(__DIR__).'/config/auth.php';
		$Repository = new \Illuminate\Config\Repository($Filesystem->get($path));
		if (empty($key) && empty($default))
		{
			return $Repository;
		}
		elseif (!empty($key))
		{
			return $Repository->get($key,$default);
		}
	}
}