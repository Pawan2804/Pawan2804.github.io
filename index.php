<?php
include "db_conn.php";	
$msg = "";
if(isset($_POST['Submit'])){

	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$Email=$_POST['Email'];
	$Phone=$_POST['PhNo'];
	$Description=$_POST['description'];
	$image = $_FILES['image']['name'];

		
	

	$firstname=mysqli_real_escape_string($con,$firstname);
	$lastname=mysqli_real_escape_string($con,$lastname);
	$Email=mysqli_real_escape_string($con,$Email);
	$Phone=mysqli_real_escape_string($con,$Phone);
	$Description=mysqli_real_escape_string($con,$Description);

	
	
	$target = "images/".basename($_FILES['image']['name']);	
	$inserting_into_book_signup="INSERT INTO book_signup(First_name,Last_name,Email,Phone_no,description,image)VALUES('$firstname','$lastname','$Email','$Phone','$Description','$image')";
  
 	$result_for_insert=mysqli_query($con,$inserting_into_book_signup);
 		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
		header("Location: post.php"); 	
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>BOOK SIGNUP</title>
</head>
<body>
<form action="index.php" method="post" enctype="multipart/form-data">
  First name:<br>
  <input type="text" name="firstname">
  <br>
  Last name:<br>
  <input type="text" name="lastname">
  <br>
  Email:<br>
  <input type="text" name="Email">
  <br>
  Phone Number:<br>
  <input type="text" name="PhNo">
  <br><br>
   Book Description:<br>
  <textarea placeholder="Description About Your Books" rows="10" cols="50" name="description"></textarea>
  <br><br>
  Upload Image:<nsbp;>
  <input type="file" name="image" id="image">
  <br><br>
  <input type="submit" name="Submit"> 

</form> 
<div>
</div>
</body>
</html>

​
