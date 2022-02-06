<?php 
session_start();
  
  $db = mysqli_connect('localhost', 'root', '', 'lendabook');
  


  if (isset($_POST['save'])) {
   
  
     
     $status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);

  $uid = 6;

  $sql ="UPDATE `users` SET `status` = '$status' WHERE `users`.`id` = $uid";
 
    mysqli_query($db,$sql ); 
  
    header('location: ../viewUsers.php');


 

}
    else {{
    if($db->query($sql)==TRUE){}
        else{
            echo "Error:".$sql."<br>".$db->error;
        }
}

}

?>



