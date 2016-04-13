<?php
namespace Simon\Auth\Interfaces;

interface LoginInterface
{
	public $user = null;
	
	public function verifyCode($code,$verify);
	
	public function checkUserExists($name);
	
	public function checkPassword($inputPassword,$databasePassword); 
	
	public function getUser(); 
	
}
