<?php 
session_start();
  $db = mysqli_connect('localhost', 'root', '', 'lendabook');

$id = $_SESSION['userid'];

  if (isset($_POST['save'])) {
    $description = $_POST['description'];
    $type = $_POST['type'];
    
    $sql =  "INSERT INTO `requests` (`description`, `type`, `user_id`) VALUES ('$description', '$type', '$id')";

    mysqli_query($db,$sql); 
    $_SESSION['message'] = "BookSaved saved"; 
    header('location: ../User.php');

}else{
	if($db->query($sql)==TRUE){}
		else{
			echo "Error:".$sql."<br>".$db->error;
		}




}



 ?>