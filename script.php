<!DOCTYPE html>
<html>
	<head>
		<title>FakeIdGenerator</title>
		<style type="text/css">
			body {
				font-size: 30px;
			}
		</style>
	</head>
	<body>
		<?php	
			$number = $_POST["number"];
			$nameset= $_POST["nameset"];
			include "classes.php";

			function Generate($namesset,$number){
				include $namesset;

				for($i=0;$i < $number;$i++) {
					$person = new Person($names[rand(0,count($names)-1)],$last_names[rand(0,count($last_names)-1)]);
					echo $person->getName();
					echo $person->getLastName();
					echo "<br>";
				}
			}

			if ($nameset == "American") {
				Generate("american.php",$number);
			}

			if ($nameset == "German") {
				Generate("german.php",$number);
			}

			
		?>
	</body>
</html>