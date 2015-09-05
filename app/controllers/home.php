<?php
/**
* Home Controller
*/
class Home extends Controller
{
	public function __construct() {
		parent::__construct();
		$this->uses(array('User', 'Location'));
	}
	
	public function index($name = '') {

		$this->layout('mylayout');

		$this->model->User->setName("Prajyot");
		$this->model->Location->setState("Goa");
		$this->view('index', ['name' => $this->model->User->getName(),
			'message' => 'We have users controller too.']);
	}

	public function create($name = '', $email = '', $phone = '') {

		$this->model->User->addRecord(array(
			'name' => $name,
			'email' => $email,
			'phone' => $phone
			));
	}
}