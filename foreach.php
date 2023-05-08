<html>
	<head>
		<title>Foreach</title>
	</head>
	<body>
		<?php
		
			$ages = Array (5,12,45,28,26,87);
			foreach($ages as $age) {
				echo $age . "<br>";
			}
			
		?>
		<br>
		<?php
		
			$ages = Array (5,12,45,28,26,87);
			foreach($ages as $position => $age) {
				echo $position . " : " . $age . "<br>";
			}
			
		?>
	</body>
</html>