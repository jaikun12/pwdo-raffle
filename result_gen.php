<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php
			include("dbconnect.php");
			$query = mysqli_query($connection, "SELECT * FROM participants_table");
			$maxSize = mysqli_num_rows($query);
			$genId = rand(1,$maxSize);
			header("Location: result.php?id=$genId");
		?>
	</body>
</html>