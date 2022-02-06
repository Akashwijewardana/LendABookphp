<?php 
  session_start();
  $db = mysqli_connect('localhost', 'root', '', 'lendabook');

  // initialize variables

  
 

  if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $isbn= $_POST['isbn'];
    $copies = $_POST['copies'];
    $author = $_POST['author'];
    

    mysqli_query($db, "INSERT INTO `book` (`name`, `desc`, `isbn`, `copies`, `author`) VALUES ( '$name', '$desc', '$isbn', '$copies', '$author')"); 
    $_SESSION['message'] = "BookSaved saved"; 
    header('location: ../Librarian.php');

}
    else {
  die("Error: The file does not exist.");
}



?>