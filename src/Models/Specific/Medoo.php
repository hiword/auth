<?php
namespace Simon\Auth\Models\Specific;
use Simon\Auth\Models\AbsModel;
use Simon\Auth\Models\Interfaces\AuthModelInterface;
class Medoo extends AbsModel implements AuthModelInterface
{
	/* 
	 * (non-PHPdoc)
	 * @see \Simon\Auth\Models\AbsModel::setConnection()
	 * @author simon
	 */
	protected function setConnection()
	{
		// TODO Auto-generated method stub
		$this->connection = new \medoo([
			'database_type' => simon_auth_config('database.driver'),
			'database_name' => simon_auth_config('database.database'),
			'server' => simon_auth_config('database.host'),
			'username' => simon_auth_config('database.username'),
			'password' => simon_auth_config('database.password'),
			'charset' => simon_auth_config('database.charset')
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
		$fieldNames = simon_auth_config('username');
		
		$where = [];
		if (is_array($fieldNames))
		{
			foreach ($fieldNames as $field)
			{
				$where['OR'][$field] = $name;
			}
		}
		else
		{
			$where = [$fieldNames=>$name];
		}

		$result = $this->connection->select($this->table, '*',array_merge($where,['LIMIT'=>1]));
// 		echo $this->connection->last_query();
// 		var_dump($result);exit();
		return $result ? $result[0] : null;
	}

	public function saveUser(array $data) 
	{
		return $this->connection->insert($this->table,$data);
	}
	
}