<?php
use Illuminate\Database\Eloquent\Model as Eloquent;
/**
* 
*/
class UserModel extends Eloquent
{
	protected $table = 'users';
	protected $fillable = array('name', 'email', 'phone');

	private $name;

	public function setName($name) {
		$this->name = $name;
	}

	public function getName() {
		return $this->name;
	}

	public function addRecord($data) {
		$this->create($data);
	}
}