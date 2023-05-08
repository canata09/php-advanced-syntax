<html>
	<head>
		<title>Pointers</title>
	</head>
	<body>
		<?php
		
			$ages = Array (4,8,12,25,36,48);
			echo "1: "	. current($ages) . "<br>";
			next($ages);
			echo "2: "	. current($ages) . "<br>";
			reset($ages);
			echo "3: "	. current($ages) . "<br>";
			
		?>
		<br>
		<?php
			
			while ($age = current($ages)){
				echo $age . ",";
				next($ages);
			}
		
		?>
	</body>
</html>