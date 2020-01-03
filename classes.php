<?php
class Person {

	public $name;
	public $last_name;
	public $phone_number;

	public $city;
	public $street;
	public $street_num;

	//American

	public function getAmericanName(){
		include "american.php";
		$this->name = $names[rand(0,count($names)-1)];
		return $this->name;
	}
	public function getAmericanLastName(){
		include "american.php";
		$this->last_name = $last_names[rand(0,count($last_names)-1)];
		return $this->last_name;
	}

	public function getAmericanNumber(){
		$this->phone_number = rand(100,999)."-".rand(100,999)."-".rand(1000,9999);
		return $this->phone_number;
	}

	public function getAmericanAdress(){
		include "american.php";
		$this->city = $cities[rand(0,count($cities)-1)];
		$this->street = $streets[rand(0,count($streets)-1)];

		$ifhouse = rand(0,1);
		if ($ifhouse == 0) {
			$this->street_num = rand(1,50);
		} elseif ($ifhouse == 1) {
			$this->street_num = rand(1,50)."/".rand(1,50);
		}
	}


	//German


	public function getGermanName(){
		include "german.php";
		$this->name = $names[rand(0,count($names)-1)];
		return $this->name;
	}
	public function getGermanLastName(){
		include "german.php";
		$this->last_name = $last_names[rand(0,count($last_names)-1)];
		return $this->last_name;
	}

	public function getGermanNumber(){
		$this->phone_number = "0".rand(100,9999)." ".rand(10,99)." ".rand(10,99)." ".rand(10,99);
		return $this->phone_number;
	}

	public function getGermanAdress(){
		include "german.php";
		$this->city = $cities[rand(0,count($cities)-1)];
		$this->street = $streets[rand(0,count($streets)-1)];

		$ifhouse = rand(0,1);
		if ($ifhouse == 0) {
			$this->street_num = rand(1,50);
		} elseif ($ifhouse == 1) {
			$this->street_num = rand(1,50)."/".rand(1,50);
		}
	}
	
}

