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
				<label for="phone">To Delete Enter Post Id</label>
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
  	

	<div class="info">
  	<?php
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
  	}			
  ?>
</div>
</div>
<?php
}
?>
 