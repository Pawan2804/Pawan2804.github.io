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
