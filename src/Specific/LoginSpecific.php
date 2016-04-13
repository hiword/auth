<?php
namespace Simon\Auth\Specific;
use Simon\Auth\Interfaces\LoginInterface;
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
	public function checkUserExists($name)
	{
		// TODO Auto-generated method stub
		$model = $this->model->getUser($name);
		
		if(empty($model))
		{
			throw new \Exception('user is not exists');
		}
		
		$this->setUser($model);
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
	
	protected function setUser(array $user)
	{
		$this->user = $user;
	}
	
	public function getUser()
	{
		return $this->user;
	}
	
	
}