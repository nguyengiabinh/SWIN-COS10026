<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Creating web application lab 10">
	<meta name="keywords" content="PHP, MySQL">
	<title>Retrieving records to HTML</title>
</head>

<body>
    <?php 
    if (isset($_POST["carmake"])){		
        $make = htmlspecialchars($_POST["carmake"]);
        $model = htmlspecialchars($_POST["carmodel"]);
        $price = htmlspecialchars($_POST["price"]);
        $yom = htmlspecialchars($_POST["yom"]);

        require_once("settings.php");	
        $conn = @mysqli_connect($host,$user,$pwd,$sql_db);	
        $sql_table = "cars";	
        $query = "insert into $sql_table (make, model, price, yom) values ('$make', '$model', '$price', '$yom')";		//MySQL command
        $result = mysqli_query($conn, $query);	
        if (!$result){		
            echo "<p class=\"wrong\">Something is wrong with ", $query, "</p>";
        } else {		
            echo "<p class=\"ok\">Successfully added New Car record</p>";
        }
        mysqli_close($conn);		
    }
    // else{
    //     header("location: addcar.html");
    // }
    
    ?>

</body>
</html>