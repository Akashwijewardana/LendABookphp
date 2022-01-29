<?php 

session_start();

$id = $_SESSION['userid'];
/*$id = 1;*/
$book_id = $_GET['id'];

/*$book_id =1;*/
/*echo $book_id;*/
 $db = mysqli_connect('localhost', 'root', '', 'lendabook');

/*require_once("../php/dbcon.php");*/

if (isset($_POST['save'])) {

	$comment = $_POST['comment'];

$sql = "INSERT INTO `book_comments` ( `book_id`, `comment`, `user_id`) VALUES ('$book_id', '$comment', '$id')";

}

if($db->query($sql)===TRUE){
echo "Sucsessfully Add to The Favorite";
header('location: ../viewMyavorites.php');

}
else{

echo "Error:".$sql."<br>".$db->error;
}





 ?>