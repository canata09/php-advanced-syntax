<html>
	<head>
		<title>Ýkinci Sayfa</title>
	</head>
	<body>
		ÝKÝNCÝ SAYFA
		<br>
		<?php
			$ad=$_GET["ad"];
			$yas=$_GET["yas"];
			echo "Adýnýz= ".$ad;
			echo "<br>";
			echo "Yaþýnýz= ".$yas;
			echo "<br>";
			$bozuk_veri = "%C7%DDZG%DD";
			echo urldecode($bozuk_veri);
		?>
	</body>
</html>