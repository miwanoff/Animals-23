<?php
require_once "Animal.php";

class Cat extends Animal
{

    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function say()
    {
        echo "meow-meow";
    }
}