<?php 

session_start();
  $db = mysqli_connect('localhost', 'root', '', 'lendabook');

$id=$_GET['id'];



  
   $sql_tableone = "UPDATE `book` SET `copies` = `copies`+1 WHERE id='$id'";

	$sql_tabletwo = "UPDATE broowbook SET status = 'Returned' WHERE id = '$id' ";

	 $sql= $sql_tableone.";".$sql_tabletwo;
		  
		  $result = mysqli_multi_query( $db,$sql);
  
  


	if($result==TRUE){

  header('location: ../LibViewBokBorrowings.php');

	}
		else{
			echo "Error:".$sql."<br>".$db->error;
		}







	 


 ?>