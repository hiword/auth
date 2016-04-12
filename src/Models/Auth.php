<?php
namespace Simon\Auth\Models;
use Illuminate\Database\Eloquent\Model;
class Auth extends Model
{
	
	public function __construct(array $attributes = [])
	{
		$this->setTable(simon_auth_config('table'));
		$this->setConnection('abc');
		parent::__construct($attributes);
	}
	
}