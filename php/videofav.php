

<?php 

session_start();

$id = $_SESSION['userid'];
/*$id = 1;*/
$video_id = $_GET['id'];

/*$book_id =1;*/
/*echo $book_id;*/
 $db = mysqli_connect('localhost', 'root', '', 'lendabook');

/*require_once("../php/dbcon.php");*/



$sql = "INSERT INTO `videofavorites` ( `vdieo_id`, `user_id`) VALUES ( '$video_id', '$id')";



if($db->query($sql)===TRUE){
echo "Sucsessfully Add to The Favorite";

}
else{

echo "Error:".$sql."<br>".$db->error;
}




 ?>