<?php
namespace Simon\Auth;
class Register
{
	
	protected $register = null;
	
	public function __construct() 
	{
		$registerClass = simon_auth_config('specific.register');
		$this->register = new $registerClass();
	}
	
	/*
	 * (non-PHPdoc)
	 * @see \Simon\Auth\Interfaces\RegisterInterface::checkPassword()
	 * @author simon
	 */
	public function checkPassword($pass1, $pass2)
	{
		$this->register->checkPassword($pass1,$pass2);
		return $this;
	}
	
	public function verifyCode($code,$verify)
	{
		$this->register->verifyCode($code,$verify);
		return $this;
	}
	
	public function checkUserExists($name)
	{
		$this->register->checkUserExists($name);
		return $this;
	}
	
	public function saveUser(array $data)
	{
		return $this->register->saveUser($data);
	}
	
}