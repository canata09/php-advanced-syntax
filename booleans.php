<html>
	<head>
		<title>Booleans</title>
	</head>
	<body>
		<?php
		
			$bool1 = true;
			$bool2 = false;
			echo $bool1 . "<br>";
			echo $bool2;
			$var1 = "Çizgi-Tagem";
			$var2 = 10;
			echo "<br>".isset($var1);
			echo "<br>".isset($var2);
			echo "<br>".isset($var3);
			unset($var1);
			echo "<br>".isset($var1);
			echo "<br>".isset($var2);
			echo "<br>".isset($var3);
			$var4 = "";
			echo "<br>".empty($var4);
			
		?>
	</body>
</html>