<<<<<<< HEAD
<?php
include "db_conn.php";
$id_url=($_GET['id']);

    $id=mysqli_real_escape_string($con,$id_url);
    $delete_query= "DELETE FROM book_signup WHERE Post_id='$id_url'";
    $del_res=mysqli_query($con, $delete_query);
  
$reading_from_book_signup="SELECT * FROM book_signup";
  $result_for_read=mysqli_query($con,$reading_from_book_signup);
  ?>
    <?php
  if($result_for_read)
  {
  	while($result1 = mysqli_fetch_object($result_for_read))
  	{
  	?>
    <!DOCTYPE html>
    <html>
    <head>
      <title></title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
  	<style>
  	div.info {
  background-color: lightgrey;
  width: 400px;
  padding: 50px;
  margin: 20px;
}
</style>
 </head> 	
  <body>
	<div class="info">
  	<?php
    $id_for_delete=$result1->Post_id;
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
  	 echo("</div><br><div style=width: 70%;margin: 10%;>"); 
  	 printf( "<img src='images/".$result1->image."'width= '400px' height='400px'>");
     ?>
    
      <a href=admin_posts.php?id=<?php echo urlencode($id_for_delete);?>><button type="submit" class="btn btn-success">Success</button></a>
    
     <?php
  	}			
  ?>
</div>
</div>
<?php
}
?>
 </body>
    </html>
=======
<!DOCTYPE html>
<html>
<head>
  <title>Admin Page</title>
</head>
<body style="margin: 15%;padding: 5%;">
  <a href="index.html" style="position: fixed;top:5px;right:5px;">Logout</a>
      <?php
    include "db_conn.php";
    if(isset($_POST['submit'])){
      if(isset($_POST['Delete'])){
        $id= $_POST['Delete'];

        $id=mysqli_real_escape_string($con,$id);
        $delete_query= "DELETE FROM book_signup WHERE Post_id='$id'";
        $del_res=mysqli_query($con, $delete_query);
    }
      
    }
    $reading_from_book_signup="SELECT * FROM book_signup";
      $result_for_read=mysqli_query($con,$reading_from_book_signup);
      ?>
      <form action="admin_posts.php" method="post">
            <div class="col">
            <label for="phone"><h2>To Delete Enter Post Id</h2></label>
            <br>
            <input type="text" name="Delete" placeholder="postid">
             <input type="submit"  name="submit">
            </div>
        </form>
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

        <?php
        echo "<div class='info' style='margin:10%;padding: 10%;border: 2px black solid;'>";
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
         echo("<br><div style=width: 70%;margin: 10%;>"); 
         printf( "<img src='images/".$result1->image."'width= '400px' height='400px'>");
         echo "</div></div>";
        }     
      ?>
    <?php
    }
    ?>
 
</body>
</html>
>>>>>>> a4517d128128c859b755c7d07c9357a813c11d18
