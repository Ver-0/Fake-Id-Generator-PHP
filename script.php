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
				First Name
			</th>
			<th>
				Last Name
			</th>
			<th>
				Phone Number
			</th>
		</tr>	
		
		

		<?php	
			$number = $_POST["number"];
			$nameset= $_POST["nameset"];
			include "classes.php";

			function Generate($namesset,$number){
				include $namesset;

				for($i=0;$i < $number;$i++) {
					echo "<tr>";
					$person = new Person($names[rand(0,count($names)-1)],$last_names[rand(0,count($last_names)-1)]);
					echo "<th>";
					echo $person->getName();
					echo "</th>";
					echo "<th>";
					echo $person->getLastName();
					echo "</th>";
					echo "<th>";
					if ($namesset == "american.php") {
						echo $person->getAmericanNumber();
					} else if ($namesset == "german.php") {
						echo $person->getGermanNumber();
					}
					echo "</th>";
					
				}
			}

			if ($nameset == "American") {
				Generate("american.php",$number);
			}

			if ($nameset == "German") {
				Generate("german.php",$number,"German number");
			}

			
		?>

		</table>
	</body>
</html>