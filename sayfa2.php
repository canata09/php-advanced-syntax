<html>
	<head>
		<title>�kinci Sayfa</title>
	</head>
	<body>
		�K�NC� SAYFA
		<br>
		<?php
			$ad=$_GET["ad"];
			$yas=$_GET["yas"];
			echo "Ad�n�z= ".$ad;
			echo "<br>";
			echo "Ya��n�z= ".$yas;
			echo "<br>";
			$bozuk_veri = "%C7%DDZG%DD";
			echo urldecode($bozuk_veri);
		?>
	</body>
</html>