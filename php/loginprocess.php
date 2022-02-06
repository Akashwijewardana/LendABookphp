
<?php 
session_start();



require_once('../php/dbcon.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";



$result = $db->query($sql);
if($result->num_rows>0){
	while ($row = $result->fetch_assoc()) {
		$_SESSION['message'] = "Logged In"; 

		$_SESSION["userid"] = $row['id'];
		$_SESSION["package"] = $row['package'];

		$role =$row['role'];


if ($role=="admin") {

header('location: ../Admin.php');
	
}elseif ($role=="librarian") {

header('location: ../Librarian.php');
	
}else{

header('location: ../User.php');

}





    	
	}

}
else{
	if($db->query($sql)==TRUE){}
		else{
			echo "Error:".$sql."<br>".$db->error;
		}
}
?>