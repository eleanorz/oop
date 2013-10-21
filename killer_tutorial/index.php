<?php include('class_lib.php') ?>

<!DOCTYPE>

<html>
	<head>
		<title>OOP in PHP</title>
		<meta charset="UTF-8">
	</head>

	<body>
<?php 
		$stefan = new person('Stefan Mischook');
		$jimmy = new person('Nick Waddles');
		$james = new employee('johnny fingers');


		echo "Stefan's Full name:" . $stefan->get_name() . "<br>";
		echo "Nick's full name:" . $jimmy->get_name();
		echo "--->" . $james->get_name();

 ?>

	</body>

</html>