<html>
	<head>
		<title>Temel</title>
	</head>
	<body>
		<?php
		
			echo "Merhaba D�nya<br>"; 
			echo 'Merhaba D�nya<br>';
			$myVariable = "Merhaba D�nya";
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