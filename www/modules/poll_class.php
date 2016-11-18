<?php

class Poll extends Module {
	
	public function __construct() {
		parent::__construct();
		$this->add("title");
		$this->add("action");
		$this->add("data", true);
	}
	
	public function getTmplFile() {
		return "poll";
	}
	
}

?>