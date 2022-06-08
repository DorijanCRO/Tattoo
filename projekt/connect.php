<!------------------ CONNECT ZA BAZU PODATAKA ------------------>
<?php
	$name = ($_POST['name']);
	$email = ($_POST['email']);
	$subject = ($_POST['subject']);
	$phone = ($_POST['phone']);
	$message = ($_POST['message']);

	//Database connection

	$conn = new mysqli('localhost','root','','contact');
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}
	else{
		$stmt = $conn->prepare("insert into contacts(name, email, subject, phone, message) values(?,?,?,?,?)");
		$stmt->bind_param("sssis",$name, $email, $subject, $phone, $message);
		$stmt->execute();
		$stmt->close();
		$conn->close();
		include ('contact.php');
	}
?>