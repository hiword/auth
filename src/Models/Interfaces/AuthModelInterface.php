<?php
namespace Simon\Auth\Models\Interfaces;
interface AuthModelInterface
{
	
	public function getUser($name); 
	
	
	public function saveUser(array $data);
	
// 	public function saveUser(array $data);
	
}