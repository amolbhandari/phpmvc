<?php
/**
* 
*/
class Controller
{
	protected $model;

	private $layout, $view, $data = [];

	public function __construct() {
		$this->model = new stdClass();
		$this->layout = 'default';		//Default layout will be app/views/Layout/default.php
	}

	/**
	 * Function to set models to be used in the controller
	 * @param  [array] $models
	 */
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

	/**
	 * Function to set view to the controller
	 * @param  [string] $view [view name]
	 * @param  array  $data [data to be passed to view]
	 */
	protected function view($view, $data = []) {
		$this->view = $view;
		$this->data = $data;
		require_once '../app/views/Layout/'. $this->layout . '.php';
	}

	/**
	 * Function to set layout to your action
	 * @param  [string] $layout [layout name app/views/Layout/mylayout.php]
	 */
	protected function layout($layout) {
		if ( file_exists('../app/views/Layout/' . $layout . '.php') ) {
			$this->layout = $layout;
		} else {
			echo "Layout ". $layout . ".php doesn't exist, please create one in views/Layout";
			die();
		}
	}

	/**
	 * Function to get view and display inside layout 
	 */
	private function content() {
		if (file_exists('../app/views/' . get_class($this) . '/' . $this->view . '.php')) {
			require_once '../app/views/' . get_class($this) . '/' . $this->view . '.php';
		} else {
			echo $this->view." view does not exist, please create file ".get_class($this)."/".$this->view.".php in views folder.";
			die();
		}
	}

	/**
	 * Function to get elements inside views
	 * @param  [string] $element [element name app/views/Element/elementname.php]
	 */
	private function element($element) {
		if (file_exists('../app/views/Element/' . $element . '.php')) {
			require_once '../app/views/Element/' . $element . '.php';
		} else {
			echo $element." element does not exist, please create file views/Element/". $element .".php ";
			die();
		}
	}
}