<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
	<font size="5">Thank You: Got Your Input</font>
	<br>
	<?php 
		echo "Name: $_POST[name]<br>";
		echo "University: $_POST[uni]<br>";
		echo "Class: $_POST[class]<br>";
		echo "Age: $_POST[age]<br>";
		echo "Hobby:<br>";
		// print_r($_POST['hobby']);
		// $hobby = $_POST['hobby'];
		// foreach ($hobby as $value) {
		// 	echo "$value <br>";
		// }
		for($i = 1; $i <= 8; $i++) {
			if(isset($_POST["hobby$i"])) {
				echo "--".$_POST["hobby$i"]."<br>";
			}
		}
		echo "Programming language:<br>";
		// print_r($_POST['prl']);
		// $prl = $_POST['prl'];
		// foreach ($prl as $value) {
		// 	echo "$value <br>";
		// }
		for($i = 1; $i <= 7; $i++) {
			if(isset($_POST["prl$i"])) {
				echo "--".$_POST["prl$i"]."<br>";
			}
		}


		//

	?>
</body>
</html>