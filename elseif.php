<html>
	<head>
		<title>Elseif</title>
	</head>
	<body>
		<?php
		
			$a = 4;
			$b = 4;
			if ($a > $b) {
				echo "a büyüktür b'den";
			} elseif($a == $b) {
				echo "a eşittir b";
			} else {
				echo "a küçüktür b'den";
			}
			
		?>
	</body>
</html>