<html>
	<head>
		<title>Varsayılan Değer</title>
	</head>
	<body>
		<?php
			
			function boyama($oda="salon",$renk="mavi") {
				echo "$oda rengi $renk olacak <br>"
			}
			boyama();
			boyama("oturma odası","kırmızı");
		?>
	</body>
</html>