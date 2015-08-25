<?php
/**
* 
*/
class Controller
{
	protected $model;

	protected function usesModel($models) {
		$result = array();
		foreach ($models as $model) {
			require_once '../app/models/' . $model . '.php';
			$result[$model] = new $model();
		}
		$this->model = $result;
	}
}