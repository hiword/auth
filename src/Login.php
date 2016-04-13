<?php
namespace Simon\Auth\Login;
use Simon\Auth\Models\Auth;
use Simon\Auth\Models\Model;
class Login 
{
	
	protected $login = null;
	
	public function __construct()
	{
		$loginClass = simon_auth_config('specific.login');
		$this->login = new $loginClass();
	}
	
	public function checkUserExists($name) 
	{
		$this->login->checkUserExists($name);
		return $this;
	}
	
	public function checkPassword($inputPassword,$databasePassword) 
	{
		$this->login->checkPassword($inputPassword,$databasePassword);
		return $this;
	}
	
	/*
	 * (non-PHPdoc)
	 * @see \Simon\Auth\Login\Interfaces\LoginInterface::verifyCode()
	 * @author simon
	 */
	public function verifyCode($code, $verify)
	{
		// TODO Auto-generated method stub
		$this->login->verifyCode($code, $verify);
		return $this;
	}
	
	public function getUser()
	{
		return $this->login->getUser();
	}
}