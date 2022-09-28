<?php
include("db.php");
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql="UPDATE `two` SET `id`='$id',`name`='$name',`email`='$email',`password`='$password' WHERE id='$id' ";
$conn->query($sql);
header("location:index.php");
?>