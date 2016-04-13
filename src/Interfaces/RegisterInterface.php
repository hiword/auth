<?php
namespace Simon\Auth\Interfaces;
interface RegisterInterface
{
	
	public function verifyCode($code,$verify);
	
	public function checkUserExists($name);
	
	public function checkPassword($pass1,$pass2);
	
	public function saveUser(array $data);
	
}
