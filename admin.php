
<?php 
session_start();
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
       $id1 = $row['User_id'];
       //print($id1);
      $_SESSION['id1'] = $id1;
      $idd=$_SESSION['id1'];
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
      <main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form method="post" action="admin.php">
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Username</label>
                                <div class="col-md-6">
                                    <input type="text"  name="username" class="form-control" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                            </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <!-- <input type="submit" name="submit" class="btn btn-primary"> -->
                                <button class="btn btn-primary" type="submit" name="submit"><span class="glyphicon glyphicon-gift"></span><a href="admin_posts.php?id=<?=urlencode($idd);?>"> Buy</button>
         </form>
                                    
                                </button>                               
                            </div>                   
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>

</body>
</html>

    
        