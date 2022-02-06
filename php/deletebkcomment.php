<?php 
 require_once('../php/dbcon.php');
session_start();


$id=$_GET['id'];
  $sql = "DELETE FROM book_comments WHERE id =$id";


   mysqli_query($db,$sql); 
  
    header('location: viewBkComments.php');


	if($db->query($sql)==TRUE){}
		else{
			echo "Error:".$sql."<br>".$db->error;
		}



 ?>