<?php

class NewAddDB extends ObjectDB {
	
	protected static $table = "sections";
	
	public function __construct() {
		parent::__construct(self::$table);
		$this->add("title", "ValidateTitle");
		$this->add("link", "ValidateURL");
		$this->add("id", "ValidateID");
	}
	
	public static function getNewAdd() {
		return self::getAll();
	}
	
}

?>