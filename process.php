<html>
	<head>
		<title>Process</title>
	</head>
	<body>
		<?php
			$kullanici_adi = htmlspecialchars($_POST["k_ad"]);
			$kullanici_sifre = htmlspecialchars($_POST["sifre"]);
			echo "Kullan�c� Ad�n�z: ".$kullanici_adi."<br>";
			echo "�ifreniz: ".$kullanici_sifre;
		?>
	</body>
</html>