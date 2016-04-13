<?php
namespace Simon\Auth\Models\Specific;
use Simon\Auth\Models\AbsModel;
use Simon\Auth\Models\Interfaces\AuthModelInterface;
use Analogue\ORM\Analogue as AnalogueORM;
class Analogue extends AbsModel implements AuthModelInterface
{
	/* 
	 * (non-PHPdoc)
	 * @see \Simon\Auth\Models\AbsModel::setConnection()
	 * @author simon
	 */
	protected function setConnection()
	{
		// TODO Auto-generated method stub
		$this->connection = new AnalogueORM([
			'driver'    => simon_auth_config('database.driver'),
			'host'      => simon_auth_config('database.host'),
			'database'  => simon_auth_config('database.database'),
			'username'  => simon_auth_config('database.username'),
			'password'  => simon_auth_config('database.password'),
			'charset'   => simon_auth_config('database.charset'),
			'collation' => simon_auth_config('database.collation')
		]);
	}

	/* 
	 * (non-PHPdoc)
	 * @see \Simon\Auth\Models\Interfaces\AuthModelInterface::getUser()
	 * @author simon
	 */
	public function getUser($name)
	{
		// TODO Auto-generated method stub
		return $this->connection->where(simon_auth_config('username'),$name)->first();
	}

	
	
	
}