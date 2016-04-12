<?php
namespace Simon\Auth\Login\Specific;
use Simon\Auth\Login\Interfaces\LoginInterface;
use Simon\Auth\Models\Auth;
use Simon\Auth\AbsAuth;
class LoginSpecific extends AbsAuth implements LoginInterface
{
	
	/* 
	 * (non-PHPdoc)
	 * @see \Simon\Auth\Login\Interfaces\LoginInterface::checkPassword()
	 * @author simon
	 */
	public function checkPassword($inputPassword,$databasePassword)
	{
		// TODO Auto-generated method stub
		if($inputPassword !== $databasePassword)
		{
			throw new \Exception('password is error');
		}
	}

	/* 
	 * (non-PHPdoc)
	 * @see \Simon\Auth\Login\Interfaces\LoginInterface::checkUsername()
	 * @author simon
	 */
	public function checkUsername($name)
	{
		// TODO Auto-generated method stub
		$model = $this->model->where(simon_auth_config('username'),$name)->first();
		if(empty($model))
		{
			throw new \Exception('user is not exists');
		}
	}

	/* 
	 * (non-PHPdoc)
	 * @see \Simon\Auth\Login\Interfaces\LoginInterface::verifyCode()
	 * @author simon
	 */
	public function verifyCode($code, $verify)
	{
		// TODO Auto-generated method stub
		return true;
	}

	
	
	
}