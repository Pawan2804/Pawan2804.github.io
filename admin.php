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
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>

<form style="border:1px solid #ccc" method="post">
  <div class="container">
    <h1>Log in</h1>
    <hr>

    <label for="email"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>  
    <label>
    <div class="clearfix">
      <button type="submit" class="signupbtn" name="submit">Log in</button>
    </div>
  </div>
</form>

</body>
</html>

    
        