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
		echo $this->model->User->getName();
		$this->model->Location->setState("Goa");
		echo ", ".$this->model->Location->getState();
	}

}