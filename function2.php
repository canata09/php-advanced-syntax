<html>
	<head>
		<title>Functions</title>
	</head>
	<body>
		<?php
			function hesapla($a,$b){
				$topla=$a+$b;
				$cikart=$a-$b;
				$dizi[0]=$topla;
				$dizi[1]=$cikart;
				return $dizi;
			}
			$d=hesapla(10,4);
			echo $d[0]."<br>";
			echo $d[1]."<br>";
		?>
	</body>
</html>