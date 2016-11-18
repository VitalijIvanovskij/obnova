<?php

class Content extends Module {
	
	public function __construct() {
		parent::__construct();
		$this->add("adds", true);
		$this->add("more_adds", true);
		$this->add("pagination");
	}
	
	public function preRender() {
		foreach ($this->adds as $add) {
			$add->count_comments_text = $this->numberOf($add->count_comments, array("комментарий", "комментария", "комментариев"));
		}
	}
	
	public function getTmplFile() {
		return "content";
	}
	
}

?>