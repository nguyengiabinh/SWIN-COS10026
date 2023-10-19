<!DOCTYPE html>
<html lang="en">

<head>
   <title>LAB7</title>
   <meta charset="utf-8">
   <meta name="description"	content="PHP">
   <meta name="keywords"	content="LAB7">	
   <meta name="author"		content="Nguyen Gia Binh">
</head>

<body>

<?php
 include ("mathfunctions.php");
?>

<h1>Factorial</h1>

<?php
 if (isset($_GET["number"])) {
   $num = $_GET["number"];
   if (isPositiveInteger($num)) {
      echo "<p>", $num, "! is ", factorial($num), ".</p>";
   } else {
      echo "<p>Pls enter a positive number</p>";
   }
 }

echo "<p><a href='factorial.html'>Return to the Entry page</p>";

?>

</body>