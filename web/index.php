<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<h1>We can use html too !!</h1>

	<?php
		$txt = "This is a variable";
		echo "$txt";

		// var_dump("Holamundo");
		// var_dump(123);
		// var_dump(10.0000);
		// var_dump(False);
		// var_dump([2, 3, 56]);
		// var_dump(NULL);

		$x = 5; // global scope

		function myTest() {
		  // using x inside this function will generate an error
		  echo "<p>Variable x inside function is: $x</p>";
		}
		myTest();
		
		echo "<p>Variable x outside function is: $x</p>";

	?>	
</body>
</html>