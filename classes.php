<?php
class Person {

	public $name;
	public $last_name;
	public $phone_number;

	public function getName(){
		return $this->name;
	}
	public function getLastName(){
		return $this->last_name;
	}

	public function getAmericanNumber(){
		$this->phone_number = rand(100,999)."-".rand(100,999)."-".rand(1000,9999);
		return $this->phone_number;
	}
	public function getGermanNumber(){
		$this->phone_number = "0".rand(100,9999)." ".rand(10,99)." ".rand(10,99)." ".rand(10,99);
		return $this->phone_number;
	}
	

	public function __construct($n,$ln){
		$this->name = $n;
		$this->last_name = $ln;
	}
}