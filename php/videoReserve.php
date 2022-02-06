<?php 

session_start();

$id = $_SESSION['userid'];
/*$id = 1;*/
$vid= $_GET['id'];

/*$book_id =1;*/
/*echo $book_id;*/
 $db = mysqli_connect('localhost', 'root', '', 'lendabook');

/*require_once("../php/dbcon.php");*/



$sql = "INSERT INTO `video_borrowing` (`video_id`, `user_id`) VALUES ('$vid','$id')";



if($db->query($sql)===TRUE){
echo "Sucsessfully Reserved";

}
else{

echo "Error:".$sql."<br>".$db->error;
}


 ?>