<?php 

//get the values from form

	$name=$_POST["usrnm"];
	$email=$_POST["email"];
	$subject=$_POST["sub"];
	$message=$_POST["msj"];

//prepare variables for db connection

	$serverName="localhost:3307";
	$userName="root";
	$password="";
	$dbName="admin";

//create connection

	$conn=new mysqli($serverName,$userName,$password,$dbName);

//check connection

	if ($conn->connect_error) {
		die("conection faild".$conn->connect_error);
	}

//prepare and bind statement

	$stmt = $conn->prepare("INSERT INTO contact (name,email,subject,message) VALUES (?,?,?,?)");
	$stmt ->bind_param("ssss",$name,$email,$subject,$message);
	$stmt->execute();

	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	header('Location:contact.html');
 ?>