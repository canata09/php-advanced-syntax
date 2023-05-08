<html>
	<head>
		<title>Temel</title>
	</head>
	<body>
		<?php
		
			$str1 = "Çizgi ";
			$str2 = "Teknoloji Araþtýrma Geliþtirme ve Eðitim Merkezi";
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
			echo "String deðiþkenin uzunluðu = " . strlen($str3);
			echo "<br>";
			echo "Boþluklarý kýrpma = " . trim($str1);
			echo "<br>";
			$str3 = "pijamalý hasta yaðýz þoföre çabucak güvendi";
			$str4 = strstr($str3,"hasta");
			echo "Kesilen kýsým = " . $str4;
			echo "<br>";
			echo "Bul ve Deðiþtir = " . str_replace("güvendi","güvenmedi",$str3);
			echo "<br>";
			echo "Tekrarla = ".str_repeat($str1,4); 
			echo "<br>";
			echo "Alýnan Kýsým = " . substr($str3,9,5);
			echo "<br>";
			echo "Karakter Pozisyonu = " . strpos($str3,"þ");
			
		?>
	</body>
</html>