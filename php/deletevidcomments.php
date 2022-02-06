<?php 

session_start();
  $db = mysqli_connect('localhost', 'root', '', 'lendabook');

$id=$_GET['id'];
  $sql = "DELETE FROM video_comments WHERE id =$id";


   mysqli_query($db,$sql); 
  
    header('location: ../LibViewComments.php');


	if($db->query($sql)==TRUE){}
		else{
			echo "Error:".$sql."<br>".$db->error;
		}



 ?>