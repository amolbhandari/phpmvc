<?php
/**
* 
*/
class Home extends Controller
{
	public function __construct() {
		parent::__construct();
		$this->uses(array('User', 'Location'));
	}
	
	public function index($name = '') {
		$this->model->User->setName("Prajyot");
		$this->model->Location->setState("Goa");
		$this->view('index', ['name' => $this->model->User->getName()]);
	}

}