<html>
	<head>
		<title>Process</title>
	</head>
	<body>
		<?php
			$kullanici_adi = htmlspecialchars($_POST["k_ad"]);
			$kullanici_sifre = htmlspecialchars($_POST["sifre"]);
			echo "Kullanýcý Adýnýz: ".$kullanici_adi."<br>";
			echo "Þifreniz: ".$kullanici_sifre;
		?>
	</body>
</html>