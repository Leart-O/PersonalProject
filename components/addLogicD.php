<?php

	include_once('config.php');

	if(isset($_POST['submit']))
	{

	    $name = $_POST['name'];
		$surname = $_POST['surname']; 
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		


			$sql = "INSERT INTO doctor(username,name,surname,email,password) VALUES (:username, :name, :surname, :email, :password)";

			$insertSql = $conn->prepare($sql);

			$insertSql->bindParam(':name', $name);
			$insertSql->bindParam(':surname', $surname);
			$insertSql->bindParam(':username', $username);
			$insertSql->bindParam(':email', $email);
			$insertSql->bindParam(':password', $password);

			$insertSql->execute();

			header('Location:dashboardD.php');
	}


?>