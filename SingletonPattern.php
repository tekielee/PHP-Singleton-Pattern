<?php
class SingleObject {
	private static $instance;
	
	function __construct() {}
	
	public static function getInstance(): object {
		if(empty(SingleObject::$instance)) {
			SingleObject::$instance = new SingleObject();
		} 
		
		return SingleObject::$instance;
	}
	
	public function showMessage(): void {
		echo 'Hello World!';
	}
}

$object = SingleObject::getInstance();
$object->showMessage();
?>