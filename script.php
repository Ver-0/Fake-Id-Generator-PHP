<!DOCTYPE html>
<html>
	<head>
		<title>FakeIdGenerator</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<table>
		<tr>
			<th>
				<i>First Name</i>
			</th>
			<th>
				<i>Last Name</i>
			</th>
			<th>
				<i>Birthday</i>
			</th>
			<th>
				<i>Phone Number</i>
			</th>
			<th>
				<i>City</i>
			</th>
			<th>
				<i>Adress</i>
			</th>
			<th>
				<i>Occupation</i>
			</th>
			
		</tr>	
		
		

		<?php	
			//Collects data from form and includes file with classes
			$number = $_POST["number"];
			$nameset= $_POST["nameset"];
			include "classes.php";


			//Function to collect and write IDs in table 
			function Generate($name,$lastname,$phonenumber,$adress,$class) {
				echo "<th>".$name."</th>";
				echo "<th>".$lastname."</th>";
				echo "<th>".$class->getBirthday()."</th>";
				echo "<th>".$phonenumber."</th>";
				$adress;
				echo "<th>".$class->city."</th>";
				echo "<th>".$class->street.$class->street_num."</th>";
				echo "<th>".$class->getOccupation()."</th>";
			}

			//Loop for generating correct number of IDs
			for ($i=0; $i < $number; $i++) { 
				$person = new Person();

				
				echo "<tr>";

				//Funtions will choose correct methods depending on nationality
				if ($nameset == "American") {
					Generate($person->getAmericanName(),$person->getAmericanLastName(),$person->getAmericanNumber(),$person->getAmericanAdress(),$person);
				}

				if ($nameset == "German") {
					Generate($person->getGermanName(),$person->getGermanLastName(),$person->getGermanNumber(),$person->getGermanAdress(),$person);
				}

				echo "</tr>";
			}

		?>

		</table>
	</body>
</html>