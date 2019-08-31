<link rel="stylesheet" type="text/css" href="style.css">
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
	<div>
	<?php
	
	 printf("%s\t %s\n",$result1->First_name,$result1->Last_name);
	 echo("<br>"); 
	 echo("<br>");
	 echo("<br>");
	 printf("%s\n",$result1->Email); 
	 echo("<br>"); 
	 printf( "<img src='images/".$result1->image."'width= '500px' height='400px' >");
	 echo "</div>";

	}
}
			
?>
