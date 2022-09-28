<?php
include("db.php");
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql="INSERT INTO two( name, email, password) VALUES ('$name','$email','$password')";
$conn->query($sql);
header("location:index.php");
?>