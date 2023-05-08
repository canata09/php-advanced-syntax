<html>
	<head>
		<title>Temel</title>
	</head>
	<body>
		<?php
		
			$array1 = array("çizgi","tagem","051203",12,1905,"sakarya");
			echo $array1[0];
			$array3 = array(6,"fox","dog",array("x","y","z"));
			echo $array3[3][1];
			$array3[3] = "xyz";
			echo "<br>";
			$array4 = array("isim" => "CUMHUR", "soyisim" => "TORUN");
			echo $array4["isim"];
			echo "<br>";
			echo "<pre>";
			print_r($array4);
			echo "</pre>";
			
		?>
	</body>
</html>