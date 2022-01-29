<?php 
  session_start();
  $db = mysqli_connect('localhost', 'root', '', 'lendabook');

  // initialize variables

  
 

  if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $desc = $_POST['desc'];

    $restrictions= $_POST['restrictions'];
    $copies = $_POST['copies'];
    $author = $_POST['author'];
    

    mysqli_query($db, "INSERT INTO `video` ( `name`, `description`, `restriction`, `author`, `copies`) VALUES ( '$name', '$desc', '$restrictions', '$copies', '$author')"); 
    $_SESSION['message'] = "VideoSaved "; 
    header('location: viewVideo.php');

}
    else {
  die("Error: The file does not exist.");
}



?>