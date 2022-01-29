<?php 
  session_start();
  $db = mysqli_connect('localhost', 'root', '', 'lendabook');

  // initialize variables
  $username = "";
  $password = "";
  
 

  if (isset($_POST['save'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $age= $_POST['age'];
    $role = "user";
     
     $package_id = filter_input(INPUT_POST, 'package', FILTER_SANITIZE_STRING);

    mysqli_query($db, "INSERT INTO `users` ( `password`, `role`,  `package_id`, `username`, `age`) VALUES ( '$password', '$role',  '$package_id', '$username', '$age')"); 
    $_SESSION['message'] = "Address saved"; 
    header('location: ../login.php');

}
    else {
  die("Error: The file does not exist.");
}



?>