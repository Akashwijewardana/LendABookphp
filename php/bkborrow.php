<?php 

session_start();


$id = $_SESSION['userid'];
$package = $_SESSION['package'];
$book_id = $_GET['id'];
$status = "Pending";


  $db = mysqli_connect('localhost', 'root', '', 'lendabook');


 

if (isset($_POST['save'])) {

	$user_id = $_POST['user_id'];
	$returndate =$_POST['returndate'];

	$sql_tableone = "UPDATE `book` SET `copies` = `copies`-1 WHERE id='$book_id'";

	$sql_tabletwo = "INSERT INTO `broowbook` ( `returndate`, `book_id`, `user_id`, `status`) VALUES ('$returndate','$book_id ',  '$user_id','$status')";



	  $sql= $sql_tableone.";".$sql_tabletwo;
		  
		  $result = mysqli_multi_query( $db,$sql);



}


if($result===TRUE){
header('location: ../LibViewBokBorrowings.php');

}
else{

echo "Error:".$sql."<br>".$db->error;
}








 ?>