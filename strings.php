<html>
	<head>
		<title>Temel</title>
	</head>
	<body>
		<?php
		
			echo "Merhaba Dünya<br>"; 
			echo 'Merhaba Dünya<br>';
			$myVariable = "Merhaba Dünya";
			echo $myVariable;
			echo "<br>";
			echo "Tekrar ".$myVariable;
		
		?>
		<br>
		<?php
		
			echo 'Tekrar {$myVariable}';
		
		?>
		
		
	</body>
</html>