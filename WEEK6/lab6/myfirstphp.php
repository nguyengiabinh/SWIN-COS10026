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
    $marks = array(85, 81, 95);  //Array
    $marks[1] = 90;  //Second element
    $ave = ($marks[0]+ $marks[1] + $marks[2])/3; //Average
    if ($ave >= 50)
        $status = "PASSED";
    else
        $status = "FAILED";
    echo "<p>The average is $ave. You $status.</p>"
?>

</body>