<?php
namespace Simon\Auth\Models;
use Simon\Auth\Models\Interfaces\AuthModelInterface;
class Model
{
	
	protected $driver;
	
	public function __construct()
	{
		$driver = simon_auth_config('specific_model.analogue');
		$this->driver = new $driver();
	}
	
	/* 
	 * (non-PHPdoc)
	 * @see \Simon\Auth\Models\Interfaces\AuthModelInterface::getUser()
	 * @author simon
	 */
	public function getUser($name)
	{
		// TODO Auto-generated method stub
		$user = $this->driver->getUser($name);
		return is_array($user) ? $user : (array)$user;
	}

	
	public function saveUser(array $data)
	{
		return $this->driver->saveUser($data);
	}
	
	
	
}