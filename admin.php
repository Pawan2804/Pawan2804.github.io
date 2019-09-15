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

<form action="admin.php" style="border:1px solid #ccc" method="post">
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
<?php
  include "db_conn.php";
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query= "SELECT * FROM admin_login where username='$username' and password = '$password'";
	$reading_from_book_signup="SELECT * FROM book_signup";
	$result_for_read=mysqli_query($con,$reading_from_book_signup);
    
    $result1=mysqli_query($con,$query);
    if(mysqli_num_rows($result1) == 1)
    {
    ?>
    <?php
    	echo("yaay");
    	if($result_for_read)
  		{
  			while($result1 = mysqli_fetch_object($result_for_read))
  			{
 
		  	 echo("<br>");
		  	 echo("<div class= post>");
		  	 echo("<div style=width: 70%;left: 10%;>");
		  	 printf("%s\t %s\n",$result1->First_name,$result1->Last_name);
		  	 echo("<br>"); 
		  	 echo("<br>");
		  	 printf("%s\n",$result1->Email); 
		  	 echo("</div><br><div style=width: 70%;margin: 10%;>"); 
		  	 printf( "<img src='images/".$result1->image."'width= '400px' height='400px'>");
		  	 echo "</div><br>";
		    echo "</div>";
		    	
  			}
  		}
	}
}
  			

echo("</div>");
?>