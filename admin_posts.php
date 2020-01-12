 <?php
    include "db_conn.php";
    session_start();
    $id1=$_SESSION['id1'];
    print($id1);
    if($id1!=0){
    if(isset($_GET['id'])){
  $id= $_GET['id'];
        $id=mysqli_real_escape_string($con,$id);
        $delete_query= "DELETE FROM book_signup WHERE Post_id='$id'";
        $del_res=mysqli_query($con, $delete_query);
    }
      
    $reading_from_book_signup="SELECT * FROM book_signup";
      $result_for_read=mysqli_query($con,$reading_from_book_signup);
      ?>
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
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <style type="text/css">
          <style type="text/css">
  .box {
  width: 90%;
  border: 2px;
  border: double;
  border-color: black;
  display:block;
  padding-top: 10px;
  display: block;
  margin-left: auto;
  margin-right: auto;
  align-content: center;
  }
  .border{  
  width: 100%;
  font-size: 50px;
  background-color: lightgrey;
  font-family: cursive;
  border-color: red;
  border-width: 5px;
  border-style: double;
  text-align: center;
  border-radius: 12px;
  padding: 10px;
  }
  .border1{
  font-size: 15px;  
  width: 95%;
  font-family: cursive;
  padding: 25px;
  justify-content: center;
  align-items: center;
  }
  img{
    width: 100%;
  }
   div.info {
          background-color: lightgrey;
          width: 400px;
          padding: 50px;
          margin: 20px;
          }
        </style>
<body style="background-color: rgba(1, 1, 1, 0);">
  
  <div class="header" style="opacity: 0.6;margin-bottom: 0px;background:linear-gradient(-35deg,#afbfdc,rgba(0, 230, 64, 1),rgba(25, 181, 254, 1));">  <!-- QUOTE BAR -->
    <div>
      <img src="logo.png" style="float: left;max-width: 13vw;border:1px solid #021a40; border-radius: 200px;border-color: white;">
    </div>
    <quote id="q">
      <div style="font-size: calc(0.75em + 1vmin);">
        Be the change you want to see in the world 
      </div> 
      <div>
         &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  - Namma Bappu 
      </div>
    </quote>
  </div>
</head>       <!-- TOP NAV BAR -->
        <div id="topnav" style="opacity: 0.9;width: 100%;">
                <a class="active" href="logout.php">Logout</a>
                <a href="index.html#">Home</a>
                <a href="book_donate.php" >Get Involved</a>
                <a href="index.html#contact">Contact</a>
                <a href="post.php" >Book Donations</a>
                <a href="index.html#mainbod" >About Us</a>
                <a class="active" href="admin.php">Admin Login</a>
        
      </div>
      <?php
       if($result_for_read)
      {
        while($result1 = mysqli_fetch_object($result_for_read))
        {
        ?>
        <style>
          div.info {
          background-color: lightgrey;
          width: 400px;
          padding: 50px;
          margin: 20px;
          }
        </style>
<br>
<!-- <center> -->
        <?php
        echo "<div class='info' style='margin:20%;padding: 10%;border: 2px black solid;'>";
        printf("ID: %s\n",$result1->Post_id);
        echo "<br>";
        echo "<br>";

         printf("Name%s\t %s\n",$result1->First_name,$result1->Last_name);
         echo("<br>"); 
         echo("<br>");
         printf("Email: %s\n",$result1->Email);
         echo("<br>"); 
         echo("<br>");
         printf("Description: %s\n",$result1->description); 
         echo("<br><div style width: 70%;margin: 10%;>"); 
         printf( "<img src='images/".$result1->image."'width= '300px' height='300px'>");?>
         <form action="admin_posts.php" method="get">
         <button class=" btn btn-danger" type="submit" name="submit"><span class="glyphicon glyphicon-gift"></span><a href="admin_posts.php?id=<?=urlencode($result1->Post_id);?>"> Delete</button>
         </form>
         <?php
         echo "</div></div>";
             
      ?>
    <?php
  }
    }
 ?> 
   <!--  </center> -->   
    </div>
    </html>
    <?php
     }
  else
    header('location:admin.php');
  
    ?> 