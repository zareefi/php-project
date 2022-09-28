<?php
include("db.php");
$sql="SELECT * FROM two";
$result=$conn->query($sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">


</head>
<body>
<form action="insert.php" method="post"class="container col-md-6">
    <input type="text" placeholder="enter the name" name="name" class="form-control">
    <input type="text" placeholder="enter the email" name="email" class="form-control">
    <input type="text" placeholder="enter the password" name="password" class="form-control">
    <input type="submit"name="submit" class="btn btn-primary btn-block">
</form>

<table class="container table" border="2px solid black">
    
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>password</th>
    <th>action</th>

    <?php
    while ($row=$result->fetch_assoc()) {
   echo "<tr>";
   echo"<td>" .$row['id']."</td>";
   echo"<td>" .$row['name']."</td>";
   echo"<td>" .$row['email']."</td>";
   echo"<td>" .$row['password']."</td>";
  echo '<td><a href="update.php?id='.$row['id'].'">update</a>
  <a href="delete.php?id='.$row['id'].'">delete</a></td>';
    
    
    
}

    ?>


</table>
</body>
</html>