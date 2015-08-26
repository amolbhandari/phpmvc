<?php
/**
* 
*/
class LocationModel
{
	private $state;

	public function setState($state) {
		$this->state = $state;
	}

	public function getState() {
		return $this->state;
	}
}