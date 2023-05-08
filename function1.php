<html>
	<head>
		<title>Functions</title>
	</head>
	<body>
		<?php
			
			function yaz1($metin){
				echo "Merhaba ". $metin;
			}
			$ad="Cumhur";
			yaz1($ad); 
			
		?>
		<br>
		<?php
			function birlestir($str1,$str2,$str3) { 
				echo $str1.$str2.$str3;
			}
			$a="Çizgi";
			$b="-";
			$c="TAGEM";
			birlestir($a,$b,$c);
			echo "<br>";
			function topla($var1,$var2){
				echo $var1+$var2;
			}
			topla(5,7);
			
		?>
	</body>
</html>