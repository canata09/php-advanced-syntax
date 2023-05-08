<html>
	<head>
		<title>Sessions</title>
	</head>
	<body>
		<?php
			session_start();
			$_SESSION["ad"] = "Cumhur";
			$_SESSION["soyad"] = "TORUN";
			$ad_soyad = $_SESSION["ad"] . " " . $_SESSION["soyad"];
			echo $ad_soyad;
		?>
	</body>
</html>