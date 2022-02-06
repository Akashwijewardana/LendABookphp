<?php 



$mysqli = new mysqli('localhost', 'root', '', 'lendabook');
$result = $mysqli->query("SELECT username FROM `users` WHERE package_id = 1");
$row = $result->fetch_assoc();


// $sql = "SELECT username FROM `users` WHERE package_id = 1";
// 	$res = mysql_query($sql) or die(mysql_error());
	while( $row = mysqli_fetch_assoc($result) )
	{
	 $area = $row['username']. ", ";  
			
	// read the list of emails from the file.
	$email_list = $area;
	
	// count how many emails there are.
	$total_emails = count((array)$email_list);
	
	// go through the list and trim off the newline character.
	for ($counter=0; $counter<$total_emails; $counter++) {
   $email_list[$counter] = trim($email_list[$counter]);
   }
 
	$to = $email_list;
 
	echo $to;

 
	  
	  $subject ="SUBject" ;
	  $message = "Reqshvdsvd";
	  mail( "cb008098@students.apiit.lk", "Subject: $subject",
	  $message, "From: " );
	  echo "Thank you for using our mail form";
	
	}


// if (isset($_REQUEST['email']))
// //if "email" is filled out, send email
// 	  {
// 	  //send email
	  
	
// 	  }
// 	else
// 	//if "email" is not filled out, display the form
// 	  {
// 	  echo "gg";
// 	  }

 ?>