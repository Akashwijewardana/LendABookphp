<?php 

session_start();


$id = $_SESSION['userid'];
$package = $_SESSION['package'];
$book_id = $_GET['id'];


  $db = mysqli_connect('localhost', 'root', '', 'lendabook');


 

if (isset($_POST['save'])) {

	$user_id = $_POST['user_id'];
	$returndate =$_POST['returndate'];

	$sql_tableone = "UPDATE `video` SET `copies` = `copies`-1 WHERE id='$book_id'";

	$sql_tabletwo = "INSERT INTO `broowvideo` ( `returndate`, `uid`, `vid`,`status`) VALUES ('$returndate', '$user_id', '$book_id','Pending');";



	  $sql= $sql_tableone.";".$sql_tabletwo;
		  
		  $result = mysqli_multi_query( $db,$sql);


}


if($result ===TRUE){

header('location: ../LibViewVidBorrowings.php');


}
else{

echo "Error:".$sql."<br>".$db->error;
}








 ?>