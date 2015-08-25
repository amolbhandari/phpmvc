<?php
/**
* 
*/
class Home extends Controller
{
	public function __construct() {
		$this->usesModel(array('User'));
	}
	
	public function index($name = '') {
		$this->model['User']->setName("Prajyot");
		echo $this->model['User']->getName();
	}

}