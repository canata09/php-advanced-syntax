<html>
	<head>
		<title>Temel</title>
	</head>
	<body>
		<?php
		
			$str1 = "�izgi ";
			$str2 = "Teknoloji Ara�t�rma Geli�tirme ve E�itim Merkezi";
			$str3 = $str1;
			$str3 .= $str2;
			echo $str3;
			echo "<br>";
			echo strtolower($str3);
			echo "<br>";
			echo strtoupper($str3);
			echo "<br>";
			echo ucfirst($str3);
			echo "<br>";
			echo ucwords($str3);
			echo "<br>";
			echo "String de�i�kenin uzunlu�u = " . strlen($str3);
			echo "<br>";
			echo "Bo�luklar� k�rpma = " . trim($str1);
			echo "<br>";
			$str3 = "pijamal� hasta ya��z �of�re �abucak g�vendi";
			$str4 = strstr($str3,"hasta");
			echo "Kesilen k�s�m = " . $str4;
			echo "<br>";
			echo "Bul ve De�i�tir = " . str_replace("g�vendi","g�venmedi",$str3);
			echo "<br>";
			echo "Tekrarla = ".str_repeat($str1,4); 
			echo "<br>";
			echo "Al�nan K�s�m = " . substr($str3,9,5);
			echo "<br>";
			echo "Karakter Pozisyonu = " . strpos($str3,"�");
			
		?>
	</body>
</html>