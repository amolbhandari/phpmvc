<?php
/**
* 
*/
class Controller
{
	protected $model;

	public function __construct() {
		$this->model = new stdClass();
	}

	protected function uses($models) {

		foreach ($models as $model) {
			if (file_exists('../app/models/' . $model . '.php')) {
				require_once '../app/models/' . $model . '.php';
				$modelClass = $model.'Model';
				$this->model->$model = new $modelClass();
			} else {
				echo $model." model does not exist, please create file ".$model.".php in models folder.";
				die();
			}
		}
	}

	protected function view($view, $data = []) {
		if (file_exists('../app/views/' . get_class($this) . '/' . $view . '.php')) {
			require_once '../app/views/' . get_class($this) . '/' . $view . '.php';
		} else {
			echo $view." view does not exist, please create file ".get_class($this)."/".$view.".php in views folder.";
			die();
		}
	}
}