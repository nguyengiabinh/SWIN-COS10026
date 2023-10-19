<!DOCTYPE html>
<html lang="en">

<head>
   <title>LAB6</title>
   <meta charset="utf-8">
   <meta name="description"	content="First PHP">
   <meta name="keywords"	content="LAB6">	
   <meta name="author"		content="Nguyen Gia Binh">
</head>

<body>
 <h1>PHP Variables, arrays and operators</h1>
 <?php
    $days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"]; //Step 1
    $days_step_3 = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];  //Step 3
    echo "The days of the week in English are:<br>";
    echo "$days[6], $days[0], $days[1], $days[2], $days[3], $days[4], $days[5].";
    echo "<br>";
    echo "<br>";
    echo "The days of the week in French are:<br>";
    echo "$days_step_3[6], $days_step_3[0], $days_step_3[1], $days_step_3[2], $days_step_3[3], $days_step_3[4], $days_step_3[5].";
?>

</body>
