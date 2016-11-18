<?php

class LeftMenuDB extends ObjectDB {
	
	protected static $table = "sections";
	
	public function __construct() {
		parent::__construct(self::$table);
		$this->add("title", "ValidateTitle");
		$this->add("link", "ValidateURL");
	}
	
	public static function getLeftMenu() {
		return self::getAll();
	}
	
}

?>