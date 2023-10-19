<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Binh">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>
    <?php
    if (isset ($_POST["firstname"])) {
        $firstname = $_POST["firstname"];
    } else {
        header ("location: register.html");
    }

    if (isset ($_POST["lastname"])) {
        $lastname = $_POST["lastname"];
    } else {
        header ("location: register.html");
    }

    if (isset ($_POST["tour"])) {
        $tour = implode(" and ", $_POST["tour"]);
    } else {
        header ("location: register.html");
    }

    if (isset ($_POST["species"])) {
        $species = $_POST["species"];
    } else {
        header ("location: register.html");
    }

    if (isset ($_POST["age"])) {
        $age= $_POST["age"];
    } else {
        header ("location: register.html");
    }

    if (isset($_POST["food"])) {
		$food = $_POST["food"];
	} else {
		header ("location: register.html");
	}

    if (isset ($_POST["partySize"])) {
        $partySize = $_POST["partySize"];
    } else {
        header ("location: register.html");
    }

    function sanitise_input($data) {
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

    $firstname = sanitise_input($firstname);
    $lastname = sanitise_input($lastname);
    $age = sanitise_input($age);
    $food = sanitise_input($food);
    $partySize = sanitise_input($partySize);


    $errMSg = "";
	
	if ($firstname == "") {
		$errMSg .= "<p>You must enter your first name </p>";
	} else if (!preg_match("/^[a-zA-Z]*$/", $firstname)) {
		$errMSg .= "<p>Only alphabet letter in your first name </p>";
	}

	if ($lastname == "") {
		$errMSg .= "<p>You must enter your last name </p>";
	} else if (!preg_match("/^[a-zA-Z-]*$/", $lastname)) {
		$errMSg .= "<p>Only alphabet letter and hyphen in your last name </p>";
	}

	if ($age==""){
		$errMSg .= "<p>You must enter a number</p>";
	} else if ($age < 10 or $age > 10000) {
        $errMSg .= "<p> The number must be from 10 to 10000 </p>";
    }

	if ($errMSg != ""){
		echo $errMSg;
	}else {
		echo "<p>Welome $firstname $lastname!</p><br>
		<p>You are now booked on the $tour<p><br>
		<p>Species: $species<p><br>
		<p>Age: $age</p><br>
        <p>Meal Preference: $food<p><br>
		<p>Number of traveller: $partySize<p>";
	}






        

    ?>
</body>

</html>