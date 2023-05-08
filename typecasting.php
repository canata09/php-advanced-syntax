<html>
	<head>
		<title>Type Casting</title>
	</head>
	<body>
		<?php
		
			$var1 = "2";
			$var1 += 3;
			echo $var1. "<br>";
			$var1 = "5abc";
			$var2 = $var1 + 3;
			echo $var2. "<br>";
			echo gettype($var1)."<br>";
			echo gettype($var2)."<br>";
			settype($var2,"string");
			echo gettype($var2)."<br>";
			settype($var1,"integer");
			echo $var1. "<br>";
			
		?>
	</body>
</html>