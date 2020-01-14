<?php
class Person {

	public $name;
	public $last_name;
	public $phone_number;

	public $birthday;
	public $age;

	public $city;
	public $street;
	public $street_num;

	public $occupation;

	//All namesets

	//Method generates and returns date with random numbers, not system related
	public function getBirthday(){
		$year = rand(1950,2001);
		$month = rand(1,12);
		if ($month == 2) {
			$day = rand(1,28);
		} else {
			$day = rand(1,30);
		}

		switch ($month) {
			case 1:
				$month = "January";
				break;
			case 2:
				$month = "February";
				break;
			case 3:
				$month = "March";
				break;
			case 4:
				$month = "April";
				break;
			case 5:
				$month = "May";
				break;
			case 6:
				$month = "June";
				break;
			case 7:
				$month = "July";
				break;
			case 8:
				$month = "August";
				break;
			case 9:
				$month = "September";
				break;
			case 10:
				$month = "October";
				break;
			case 11:
				$month = "November";
				break;
			case 12:
				$month = "December";
				break;
		}

		$this->birthday = "$month $day, $year";

		return $this->birthday;
	}

	//Method generates and returns random occupation from occupation.php table
	public function getOccupation(){
		include "occupation.php";
		$this->occupation = $occupation[rand(0,count($occupation)-1)];

		return $this->occupation;
	}

	//American

	//Method generates and returns random name from american.php names table
	public function getAmericanName(){
		include "american.php";
		$this->name = $names[rand(0,count($names)-1)];
		return $this->name;
	}
	//Method generates and returns random last name from american.php last names table
	public function getAmericanLastName(){
		include "american.php";
		$this->last_name = $last_names[rand(0,count($last_names)-1)];
		return $this->last_name;
	}
	//Method generates and returns american number with correct formula
	public function getAmericanNumber(){
		$this->phone_number = rand(100,999)."-".rand(100,999)."-".rand(1000,9999);
		return $this->phone_number;
	}
	//Method generates and returns random city and street from american.php cities and streets tables
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

	//Method generates and returns random name from german.php names table
	public function getGermanName(){
		include "german.php";
		$this->name = $names[rand(0,count($names)-1)];
		return $this->name;
	}
	//Method generates and returns random last name from german.php last names table
	public function getGermanLastName(){
		include "german.php";
		$this->last_name = $last_names[rand(0,count($last_names)-1)];
		return $this->last_name;
	}
	//Method generates and returns german number with correct formula
	public function getGermanNumber(){
		$this->phone_number = "0".rand(100,9999)." ".rand(10,99)." ".rand(10,99)." ".rand(10,99);
		return $this->phone_number;
	}
	//Method generates and returns random city and street from german.php cities and streets tables
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

