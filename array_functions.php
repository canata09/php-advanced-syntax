<html>
	<head>
		<title>Temel</title>
	</head>
	<body>
		<?php
		
			$array1 = array(4,42,23,16,15,8);
			echo "Dizinin Eleman Say�s� = " . count($array1) . "<br>";
			echo "Dizinin En B�y�k Eleman� = " . max($array1) . "<br>";
			echo "Dizinin En K���k Eleman� = " . min($array1) . "<br>";
			sort($array1);
			print_r($array1);
			echo "<br>";
			rsort($array1);
			print_r($array1);
			echo "<br>";
			echo implode("+" , $array1); 
			$myString = "�izgi-Teknoloji-Ara�t�rma-Geli�tirme-Ve-E�itim-Merkezi";
			$array2 = explode("-",$myString);
			echo "<br>";
			print_r ($array2);
			echo "<br>";
			echo in_array(4,$array1);
		
			
		?>
	</body>
</html>