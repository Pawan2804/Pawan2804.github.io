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
  $category=$_POST['category'];

		
	

	$firstname=mysqli_real_escape_string($con,$firstname);
	$lastname=mysqli_real_escape_string($con,$lastname);
	$Email=mysqli_real_escape_string($con,$Email);
	$Phone=mysqli_real_escape_string($con,$Phone);
	$Description=mysqli_real_escape_string($con,$Description);

	
	
	$target = "images/".basename($_FILES['image']['name']);	
	$inserting_into_book_signup="INSERT INTO book_signup(First_name,Last_name,Email,Phone_no,description,image,book_type)VALUES('$firstname','$lastname','$Email','$Phone','$Description','$image','$category')";
  
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
<html style="scroll-behavior: smooth;">
<head>
  <title>Book Donation BTCH</title>
  <link rel="icon" type="image/png" href="logo.png" />
  <script src="index.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lobster|Merienda|Merriweather|Nova+Script|Lato" rel="stylesheet"> 
  <link rel="stylesheet" type="text/css" href="index.css">
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIagkEIkCFF1GjIVT9eif2fx2c-0_P5sQ &callback=initMap">
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 
</head>
<body style="background-color: rgba(1, 1, 1, 0);">
  
  <div class="header" style="opacity: 0.6;margin-bottom: 0px;background:linear-gradient(-35deg,#afbfdc,rgba(0, 230, 64, 1),rgba(25, 181, 254, 1));">  <!-- QUOTE BAR -->
    <div>
      <img src="logo.png" style="float: left;max-width: 13vw;border:1px solid #021a40; border-radius: 200px;border-color: white;">
    </div>
    <quote id="q">
      <div style="font-size: calc(0.75em + 1vmin);">
        Be the chaneg you want to see in the world 
      </div> 
      <div>
         &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  - Namma Bappu 
      </div>
    </quote>
  </div>

  <div style="margin-top: 2%;margin-bottom: 5%;width:100%;/*position: -webkit-sticky;position: sticky;*/top: 0;z-index: 1;">       <!-- TOP NAV BAR -->
        <div id="topnav" style="opacity: 0.9;width: 100%;">
          <a class="active" href="index.html#">Home</a>
                <a href="book_donate.php" >Get Involved</a>
                <a href="index.html#contact">Contact</a>
                <a href="post.php" >Book Donations</a>
                <a href="index.html#mainbod" >About Us</a>
                <a href="admin.php">Admin Login</a>
        </div>
      </div>
  <br>


<form action="book_donate.php" method="post" enctype="multipart/form-data" style="margin:15% 3%;width: 50%;max-width: 400px;">
  <style type="text/css">
    input{
      margin:10px;
    }

    .button {
              background-color: #1E90FF;
              border: none;
              color: white;
              padding: 10px 25px;
              text-align: center;
              text-decoration: none;
              font-size: 18px;
            }
  </style>
  <div style="display: flex;">  
    <div style="width: 40%;min-width: 100px;margin-left: 5%;margin-top: 10px;">
      First name:<br><br> 
      Last name:<br><br>
      Email:<br><br>
      Phone Number:<br><br><br>
      Book Description:<br><br><br><br><br>
    </div>
    <div style="width: 80%;margin-right: 5%;">
      <input type="text" name="firstname">
      <br>
      <input type="text" name="lastname">
      <br>
      <input type="text" name="Email">
      <br>
      <input type="text" name="PhNo">
      <br><br>
      <textarea placeholder="Description About Your Books" rows="10" cols="50" name="description" style="width:143%;"></textarea>
      <select name="category">
  <option value="Fiction">Fiction</option>
  <option value="NonFiction">NOn Fiction</option>
  <option value="Academic">Academic</option>
  
</select>
      <br><br>
      Upload Image:<nsbp;>
      <input type="file" name="image" id="image" style="width: 200px;">
      <br><br>
      <input class="button" type="submit" name="Submit" value="Donate Book"> 
    </div>
  </div>
</form> 


<div class="botnav" style="align-content: space-around;width: 100%; width: 100%;">  <!-- BOTNAV BAR --> 


          <style>
              /* Always set the map height explicitly to define the size of the div
               * element that contains the map. */
              #map {
                height: 100%;
              }
              /* Optional: Makes the sample page fill the window. */
              html, body {
                height: 100%;
                margin: 0;
                padding: 0;
              }
            </style>
            <div id="map" style="margin: 5%;margin-top: 30px;height: 300px;width: 300px;background-image: url('loading.gif');"></div>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIagkEIkCFF1GjIVT9eif2fx2c-0_P5sQ &callback=initMap"></script>
            <script>
              var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 15.26883, lng: 76.39092},
                zoom: 11
              });
            </script>
                
  <!-- 
          <div id="map" style="margin: 5%;margin-top: 30px;height: 300px;width: 300px;background-image: url('loading.gif');">  -->
          </div>
          <div id="botnavbar" style="width: 40%;height: auto;padding-top:10%;">
             <a class="active" href="index.html#">Home</a>
                <a href="book_donate.php" >Get Involved</a>
                <a href="index.html#contact">Contact</a>
                <a href="post.php" >Book Donations</a>
                <a href="index.html#mainbod" >About Us</a>
                <a href="admin.php">Admin Login</a>
            <!-- <a href="#" class="cd-top text--replace js-cd-top" >BACK TO TOP ^</a> -->
          </div>
          <div class="cd-top text--replace js-cd-top" style="width: auto;height: auto;position:fixed;right: 5px;bottom: 15px;text-shadow: black;">
            <a href="#" class="cd-top text--replace js-cd-top" style="font-size: 20px;text-shadow: black;">TOP ^</a>
          </div>
        </div>
        <div id="contact" class="botnav" style="align-content: space-around;width: 100%;">
          <div style="font-family: 'Merriweather', serif; font-size: 20px;width: auto;height: auto;color: white;">
            <h2 style="color: white;">Reach Us</h2>
              <h4 style="color: white;"><strong>Be The Change Hospete</strong></h4>
              132, AECS Layout, ITPL Main Road<br>
                Kundalahalli, Bangalore 560037, India<br>
                <strong>Nagendra:  <a href="tel:+919071011970">+919071011970</a></strong><br>
                <strong>Sampadha:  <a href="tel:+919880120838">+919880120838</a></strong><br>
                <strong><a href="mailto:viral1997@gmail.com" target="_blank">viral1997@gmail.com</a></strong>
             
          </div>

          <div style="width: 200px;height: auto;display: flex;">
                  <a href="https://www.instagram.com/socialhackathoncmrit/" target="_blank"><img src="ig.png" class="footerimg"></a>
                  <a href="https://www.facebook.com/SocialHackathonCMRIT" target="_blank"><img src="foot2.png" class="footerimg"></a>
          </div> 
        </div>

        <section class="credits">
                  <div>This website was designed by <a class="l1" href="https://github.com/virus4297" target="_blank">V P</a> and <a class="l2" href="https://github.com/Pawan2804" target="_blank">P V</a></div>
          </section>
      <!--     </div> -->

</body>
</html>

​
