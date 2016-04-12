<?php
namespace Simon\Auth;
use Simon\Auth\Models\Auth;
use Illuminate\Config\Repository;
use Illuminate\Filesystem\Filesystem;
abstract class AbsAuth
{
	
	
	protected $model = null;
	
	public function __construct(Auth $Auth) 
	{
		$this->model = $Auth;
	}
	
}