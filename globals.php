<html>
	<head>
		<title>Globals</title>
	</head>
	<body>
		<?php
			$x=5;
			function hesapla($a){
				global $x;
				$carpim=$a*$x;
				return $carpim;
			}
			echo hesapla(10);
		?>
	</body>
</html>