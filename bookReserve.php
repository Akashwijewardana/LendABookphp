<?php 

session_start();

$id = $_SESSION['userid'];
/*$id = 1;*/
$book_id = $_GET['id'];

/*$book_id =1;*/
/*echo $book_id;*/
 $db = mysqli_connect('localhost', 'root', '', 'lendabook');

/*require_once("../php/dbcon.php");*/



$sql = "INSERT INTO `book_borrowing` (`book_id`, `user_id`) VALUES ('$book_id','$id')";



if($db->query($sql)===TRUE){
echo "Sucsessfully Reserved";

}
else{

echo "Error:".$sql."<br>".$db->error;
}


 ?>