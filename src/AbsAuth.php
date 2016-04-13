<?php
namespace Simon\Auth;
use Simon\Auth\Models\Auth;
use Illuminate\Config\Repository;
use Illuminate\Filesystem\Filesystem;
use Simon\Auth\Models\Model;
abstract class AbsAuth
{
	
	/**
	 * 
	 * @var Simon\Auth\Models\Model
	 * @author simon
	 */
	protected $model = null;
	
	
	/**
	 * 
	 * 
	 * @author simon
	 */
	public function __construct() 
	{
		$this->model = new Model();
	}
	
}