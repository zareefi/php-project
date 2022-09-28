<?php
include("db.php");
$id=$_GET['id'];
$sql="DELETE FROM two WHERE id='$id'";
$result=$conn->query($sql);
header("location:index.php");


?>