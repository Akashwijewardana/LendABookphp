<?php 

session_start();
  $db = mysqli_connect('localhost', 'root', '', 'lendabook');

$id=$_GET['id'];
  $sql = "UPDATE broowvideo SET status = 'Returned' WHERE id = '$id' ";


   mysqli_query($db,$sql); 
  
    header('location: ../LibViewVidBorrowings.php');


	if($db->query($sql)==TRUE){}
		else{
			echo "Error:".$sql."<br>".$db->error;
		}



 ?>