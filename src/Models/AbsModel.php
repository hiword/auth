<?php
namespace Simon\Auth\Models;
use Illuminate\Database\DatabaseServiceProvider;
use Illuminate\Container\Container;
abstract class AbsModel
{
	protected $connection = null;
	
	protected $table = null;
	
	public function __construct()
	{
		$this->setConnection();
		$this->setTable();
	}
	
	/**
	 * 
	 * 
	 * @author simon
	 */
	abstract protected function setConnection();
	
	/**
	 * 
	 * @param string $table
	 * @author simon
	 */
	protected function setTable($table = null)
	{
		$this->table = $table ? $table : simon_auth_config('table');
	}
	
}