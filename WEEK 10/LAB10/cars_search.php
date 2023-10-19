<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Creating web application lab 10">
	<meta name="keywords" content="PHP, MySQL">
	<title>Search result</title>
</head>
<body>
	<h1>Creating web application - lab 10</h1>
	<?php
		if (isset($_POST["carmake"])){	

			require_once("settings.php");	
			$conn = @mysqli_connect($host,$user,$pwd,$sql_db);	
			$sql_table = "cars";	
			$query = "SELECT * FROM $sql_table WHERE 1=1";
				if (!empty($_POST["make"])) {
					$make = mysqli_escape_string($conn, $_POST["make"]);
					$query .= " AND make LIKE '%$make%'";
				}
				if (!empty($_POST["model"])) {
					$model = mysqli_escape_string($conn, $_POST["model"]);
					$query .= " AND model LIKE '%$model%'";
				}
				if (!empty($_POST["price"])) {
					$price = mysqli_escape_string($conn, $_POST["price"]);
					$query .= " AND price LIKE '%$price%'";
				}

			$result = mysqli_query($conn, $query);	
			if (!$result){			
				echo "<p>Something is wrong with ", $query, "</p>";
			} else {			
				echo "<table border='1'>";
				echo "<tr>
							<th scope='col'>Make</th>
							<th scope='col'>Model</th>
							<th scope='col'>Price</th>
					  </tr>";
				while ($row = mysqli_fetch_assoc($result)){
					echo "<tr>\n";
					echo "<td>", $row["make"], "</td>\n";
					echo "<td>", $row["model"], "</td>\n";
					echo "<td>", $row["price"], "</td>\n";
					echo "</tr>\n";
				}
				echo "</table>";
				mysqli_free_result($result);		
			}
			mysqli_close($conn);
		}
	?>
</body>
</html>