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
			$number = $_POST["number"];
			$nameset= $_POST["nameset"];
			include "classes.php";

			for ($i=0; $i < $number; $i++) { 
				$person = new Person();

				echo "<tr>";

				if ($nameset == "American") {
					echo "<th>".$person->getAmericanName()."</th>";
					echo "<th>".$person->getAmericanLastName()."</th>";
					echo "<th>".$person->getBirthday()."</th>";
					echo "<th>".$person->getAmericanNumber()."</th>";
					$person->getAmericanAdress();
					echo "<th>".$person->city."</th>";
					echo "<th>".$person->street.$person->street_num."</th>";
					echo "<th>".$person->getOccupation()."</th>";
				}

				if ($nameset == "German") {
					echo "<th>".$person->getGermanName()."</th>";
					echo "<th>".$person->getGermanLastName()."</th>";
					echo "<th>".$person->getBirthday()."</th>";
					echo "<th>".$person->getGermanNumber()."</th>";
					$person->getGermanAdress();
					echo "<th>".$person->city."</th>";
					echo "<th>".$person->street.$person->street_num."</th>";
					echo "<th>".$person->getOccupation()."</th>";
				}

				echo "</tr>";
			}

		?>

		</table>
	</body>
</html>