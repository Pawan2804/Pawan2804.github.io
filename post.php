Skip to content
Search or jump to…

Pull requests
Issues
Marketplace
Explore
 
@Pawan2804 
Learn Git and GitHub without any code!
Using the Hello World guide, you’ll start a branch, write comments, and open a pull request.


1
00Pawan2804/NGO_php
 Code Issues 0 Pull requests 0 Projects 0 Wiki Security Insights Settings
NGO_php/post.html
 virus4297 virus here
747bcab 8 hours ago
160 lines (134 sloc)  6.35 KB
  

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
          <a href="application.html" >Get Involved</a>
          <a href="index.html#contact">Contact</a>
          <a href="book_donate.html" >Book Donation</a>
          <a href="index.html#mainbod" >About Us</a>
        </div>
      </div>
  <br><br>






<style type="text/css">
  .post{
    margin:20px;
    width: 150px;
    background-color: white;
    border: 2px solid red ;
    font-family: 'Lato', cursive;
    font-size: calc(0.6em + 1vmin);
  }
</style>
<div style="width: 100%;margin:10px 0;display: block;">
  <?php
  include "db_conn.php";

  $reading_from_book_signup="SELECT * FROM book_signup";
  $result_for_read=mysqli_query($con,$reading_from_book_signup);

  if($result_for_read)
  {
  	while($result1 = mysqli_fetch_object($result_for_read))
  	{
  	?>
  	<br>
  	<div class="post">
  		<div style=width: 70%;left: 10%;>
  	<?php
 
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
  			
  ?>
</div>






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
            <a href="application.html" >Get Involved</a>
            <a href="index.html#contact">Contact</a>
            <a href="donate.html" >Donate</a>
            <a href="index.html#mainbod" >About Us</a>
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
© 2019 GitHub, Inc.
Terms
Privacy
Security
Status
Help
Contact GitHub
Pricing
API
Training
Blog
About