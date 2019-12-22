<?php

class Person {

	public $name;
	public $last_name;

	public function getName(){
		return $this->name;
	}
	public function getLastName(){
		return $this->last_name;
	}
	

	public function __construct($n,$ln){
		$this->name = $n;
		$this->last_name = $ln;
	}
}