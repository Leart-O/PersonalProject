<?php

include_once('config.php');

if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$name = $_POST['name'];
	$surname = $_POST['surname'];	
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	

	$sql = "UPDATE doctor SET username=:username, name=:name, surname=:surname, email=:email, password=:password WHERE id=:id";
	$prep = $conn->prepare($sql);
	$prep->bindParam(':id', $id);
	$prep->bindParam(':name', $name);
	$prep->bindParam(':surname', $surname);	
	$prep->bindParam(':username', $username);
	$prep->bindParam(':email', $email);
	$prep->bindParam(':password', $password);
	

	$prep->execute();

	header("Location:dashboardD.php");
}


?>
