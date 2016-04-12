<?php
namespace Simon\Auth\Login;
use Simon\Auth\Models\Auth;
class Login
{
	
	protected $login = null;
	
	public function __construct()
	{
		$loginClass = simon_auth_config('specific.login');
		$this->login = new $loginClass(new Auth());
		
		$this->login->checkUsername('abc');
	}
	
}