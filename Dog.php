<?php
require_once "Animal.php";

class Dog extends Animal {

	public function __construct($name) {
		parent::__construct($name);
	}

	public function say() {
		echo "woof-woof!";
	}
}