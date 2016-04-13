<?php
namespace Simon\Auth\Specific;
use Simon\Auth\AbsAuth;
use Simon\Auth\Interfaces\RegisterInterface;
class RegisterSpecific extends AbsAuth implements RegisterInterface
{
	
	/* 
	 * (non-PHPdoc)
	 * @see \Simon\Auth\Interfaces\RegisterInterface::checkPassword()
	 * @author simon
	 */
	public function checkPassword($pass1, $pass2)
	{
		if ($pass1 !== $pass2)
		{
			throw new \Exception('password is not eq');
		}
	}

	public function verifyCode($code,$verify)
	{
		return true;
	}
	
	public function checkUserExists($name)
	{
		$user = $this->model->getUser($name);
		
		if ($user)
		{
			throw new \Exception('user is exists');
		}
	}
	
	public function saveUser(array $data)
	{
		$result = $this->model->saveUser($data);
		if (empty($result)) 
		{
			throw new \Exception('user save error');
		}
		
		return $result;
	}
	
}
