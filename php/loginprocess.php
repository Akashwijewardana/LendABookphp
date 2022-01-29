
<?php 
session_start();

$db = mysqli_connect('localhost', 'root', '', 'lendabook');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

$result = $db->query($sql);
if($result->num_rows>0){
	while ($row = $result->fetch_assoc()) {
		$_SESSION['message'] = "Logged In"; 

		$_SESSION["userid"] = $row['id'];
		$_SESSION["package"] = $row['package'];
    	header('location: ../viewBooks.php');
	}

}
else{
	if($db->query($sql)==TRUE){}
		else{
			echo "Error:".$sql."<br>".$db->error;
		}
}
?>