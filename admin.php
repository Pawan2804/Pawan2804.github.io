

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="admin.css">
  <title>Admin Login</title>
  <title>Be The Change Hospete</title>
        <link rel="icon" type="image/png" href="logo.png" />
        <script src="index.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://fonts.googleapis.com/css?family=EB+Garamond:400,800&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="index.css">
        <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIagkEIkCFF1GjIVT9eif2fx2c-0_P5sQ &callback=initMap">
          </script>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
       
</head>
<body>
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
  

  <div style="margin-top: 2%;margin-bottom: 5%;width:100%;top: 0;">       <!-- TOP NAV BAR -->
        <div id="topnav" style="opacity: 0.9;width: 100%;">
                <a href="index.html#">Home</a>
                <a href="book_donate.php" >Get Involved</a>
                <a href="index.html#contact">Contact</a>
                <a href="post.php" >Book Donations</a>
                <a href="index.html#mainbod" >About Us</a>
                <a class="active" href="admin.php">Admin Login</a>
        </div>
      </div>
      <br>
      <br>
      <br>
      <br>  <br>  <br>  
      
      <form class="box" method="POST" style="position: absolute;">
  <h1>Admin Login</h1>
  <input type="text" name="username" placeholder="username">
  <input type="text" name="password" placeholder="password">
  <button type="submit" name="submit" value="login"><a href="admin_posts.php?id='bla'"> Buy</button>

</form>

</body>
</html>

    
        