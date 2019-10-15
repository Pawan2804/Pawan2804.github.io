<?php
include "db_conn.php";
if(isset($_POST['submit']))
{
  $username=$_POST['username'];
  $password=$_POST['password'];
$query= "SELECT * FROM admin_login where username='$username' and password = '$password'";
$result1=mysqli_query($con,$query);
    if(mysqli_num_rows($result1) == 1){
      $row = mysqli_fetch_assoc($result1);
      header('location:admin_posts.php');
    }    
    
    else
         echo"<script>alert('wrong username or password');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="admin.css">
  <title>Admin Login</title>
</head>
<body>
  
<form class="box" method="POST">
  <h1>Admin Login</h1>
  <input type="text" name="username" placeholder="username">
  <input type="text" name="password" placeholder="password">
  <input type="submit" name="submit" value="login">

</form>
</body>
</html>

    
        