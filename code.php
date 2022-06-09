<?php



if(isset($_POST['submit'])){

	$n = $_POST["name"];
	$e = $_POST["email"];
	$c = $_POST["category"];
	$d = $_POST["details"];
	


$conn = new mysqli('localhost','root','','dyk');


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO contribute ( Name, Email, Category, Details)VALUES ('$n', '$e', '$c', '$d')";

if ($conn->query($sql) === TRUE) {
	
echo "Thank you for contributon ";
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