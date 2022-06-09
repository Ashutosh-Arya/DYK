<?php

if(isset($_POST['submit'])){

	$a = $_POST["name"];
	$b = $_POST["email"];
	$c = $_POST["optionsRadios"];
	$d = $_POST["experience"];
	$e = $_POST["scale"];
	$f = $_POST["features"];
	$g = $_POST["p_suggestions"];
	


$conn = new mysqli('localhost','root','','dyk');


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO feedback(Name, Email, Expectations, Experience, Scale, Features, P_Suggestions) values('$a', '$b', '$c', '$d', '$e', '$f', '$g')";

if ($conn->query($sql) === TRUE) {
	
echo "Thank you for Your feedback ";
?>
<html> <h3> Go
<a href="index.html">home</a></html>
 <?php
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
   
$conn->close();


}
	
?>