<?php
include 's.php';
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];



$sql = "INSERT INTO gl (name, email ,  password) VALUES('$name','$email','$password')";

if($conn->query($sql) === TRUE){
	echo " record added successfully";
	echo " record not successful ";
	}else{
}

$conn->close();
?>