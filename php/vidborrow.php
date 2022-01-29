<?php 

session_start();


$id = $_SESSION['userid'];
$package = $_SESSION['package'];
$book_id = $_GET['id'];


  $db = mysqli_connect('localhost', 'root', '', 'lendabook');


 

if (isset($_POST['save'])) {

	$user_id = $_POST['user_id'];
	$returndate =$_POST['returndate'];

$sql = "INSERT INTO `broowvideo` ( `returndate`, `uid`, `vid`) VALUES ('$returndate', '$user_id', '$book_id');";

}


if($db->query($sql)===TRUE){
echo "Sucsessfully Add to Book Borrowing ";

}
else{

echo "Error:".$sql."<br>".$db->error;
}








 ?>