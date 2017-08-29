<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php
			include("dbconnect.php");
			$id = $_GET["id"];
			$query = mysqli_query($connection, "SELECT name FROM participants_table WHERE id = '$id'");
			$result = mysqli_fetch_assoc($query);
			echo $result["name"];
		?>
	</body>
</html>