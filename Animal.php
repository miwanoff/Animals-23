<?php
abstract class Animal {
	private $name;

	public function __construct($name) {
		$this->name = $name;
	}

	abstract public function say();

	public function getName() {
		return $this->name;
	}
}