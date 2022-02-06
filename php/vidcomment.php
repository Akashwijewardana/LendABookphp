<?php 

session_start();

$id = $_SESSION['userid'];
/*$id = 1;*/
$video_id = $_GET['id'];

/*$book_id =1;*/
/*echo $book_id;*/
 $db = mysqli_connect('localhost', 'root', '', 'lendabook');

/*require_once("../php/dbcon.php");*/

if (isset($_POST['save'])) {

	$comment = $_POST['comment'];

$sql = "INSERT INTO `video_comments` ( `video_id`, `comment`, `user_id`) VALUES ('$video_id', '$comment', '$id')";

}

if($db->query($sql)===TRUE){
echo "Sucsessfully Add to The Favorite";
header('location: ../viewVideos.php');

}
else{

echo "Error:".$sql."<br>".$db->error;
}





 ?>