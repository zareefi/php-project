<?php
include("db.php");
$id=$_GET['id'];
$sql="SELECT * FROM two WHERE id='$id'";
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
    <?php
while ($row=$result->fetch_assoc()) {?>
    <form action="insert.php" method="post"class="container col-md-6">
        <input type="hidden"value="<?php echo $row['id'] ?>" name="id">
    <input type="text" placeholder="enter the name" value="<?php echo $row['name'] ?>" name="name" class="form-control">
    <input type="text" placeholder="enter the email"value="<?php echo $row['email'] ?>"  name="email" class="form-control">
    <input type="text" placeholder="enter the password"value="<?php echo $row['password'] ?>" name="password" class="form-control">
    <input type="submit"name="submit" class="btn btn-primary btn-block">
</form>
<?php
}
?>



    
</body>
</html>