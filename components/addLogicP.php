<?php

	include_once('config.php');

	if(isset($_POST['submit']))
	{

        $username = $_POST['username'];
	    $name = $_POST['name'];
		$surname = $_POST['surname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		


			$sql = "INSERT INTO patient(username,name,surname,email,password) VALUES (:username, :name, :surname, :email, :password)";

			$insertSql = $conn->prepare($sql);

			$insertSql->bindParam(':username', $username);
			$insertSql->bindParam(':name', $name);
			$insertSql->bindParam(':surname', $surname);
			
			$insertSql->bindParam(':email', $email);
			$insertSql->bindParam(':password', $password);

			$insertSql->execute();

			echo "The user has been added successfully";

			echo "<br>";

			echo "<a href='dashboardP.php'>Dashboard</a>";

	}


?>