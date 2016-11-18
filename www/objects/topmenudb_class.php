<?php

class TopMenuDB extends ObjectDB {
	
	protected static $table = "categories";
	
	public function __construct() {
		parent::__construct(self::$table);
		$this->add("title", "ValidateTitle");
		$this->add("link", "ValidateURL");
	}
	
	public static function getTopMenu() {
		return self::getAll();
	}
	
}

?>