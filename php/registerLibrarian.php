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
    $role = "librarian";
     
     $package_id = 0;

    mysqli_query($db, "INSERT INTO `users` ( `password`, `role`,  `package_id`, `username`, `age`) VALUES ( '$password', '$role',  '$package_id', '$username', '$age')"); 
    $_SESSION['message'] = "Librarian saved"; 
    header('location: ../Admin.php');

}
    else {
  die("Error: The file does not exist.");
}



?>