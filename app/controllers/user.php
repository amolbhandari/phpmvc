<?php
/**
* User Controller
*/
class User extends Controller
{
	public function __construct() {
		parent::__construct();
		$this->uses(array('User'));
	}
	
	public function index($name = '') {
		$this->model->User->setName("Prajyot");
		echo $this->model->User->getName();
	}

}