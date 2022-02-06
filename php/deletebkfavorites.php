<?php 

session_start();
  require_once('../php/dbcon.php');

$id=$_GET['id'];
  $sql = "DELETE FROM bookfavorites WHERE id ='$id'";


   mysqli_query($db,$sql); 
  
    header('location: ../viewFavoriteBook.php');


	if($db->query($sql)==TRUE){}
		else{
			echo "Error:".$sql."<br>".$db->error;
		}



 ?>