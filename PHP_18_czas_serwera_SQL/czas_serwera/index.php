<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Czas w SQL</title>
		<link rel="stylesheet" href="styl.css">
	</head>
	<body>
		<?php
			$serwer = 'localhost';
			$user = 'root';
			$pass = '';
			$db = '';
			$info = "Nie maożna nawiązać połączenia lub nie ma takiej bazy";
			$conn = @mysqli_connect($serwer,$user,$pass,$db) or die ($info);
			$sql0 = 'SELECT now();';
			$sql1 = 'SELECT YEAR(now());';
			$sql2 = 'SELECT MONTH(now());';
			$sql3 = 'SELECT DAY(now());';
			$result = mysqli_query($conn, $sql0);
			$result1 = mysqli_query($conn, $sql1);
			$result2 = mysqli_query($conn, $sql2);
			$result3 = mysqli_query($conn, $sql3);
			$row = mysqli_fetch_row($result);
			$row1 = mysqli_fetch_row($result1);
			$row2 = mysqli_fetch_row($result2);
			$row3 = mysqli_fetch_row($result3);
			echo($row[0]."<br />".$row1[0]."-".$row2[0]."-".$row3[0]);
			mysqli_close($conn);
		?>
	</body>
</html>