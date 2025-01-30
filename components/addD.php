<?php
include_once('header.php');
include_once('footer.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style>

		form>input {
		    margin-bottom: 10px;
		    font-size: 20px;
		    padding: 5px;
		}

		button {
		    background: none;
		    border: none;
		    border: 1px solid black;
		    padding: 10px 40px;
		    font-size: 20px;
		    cursor: pointer;
		}
	</style>
</head>
<body>
	
<br><br><br><br><br><br>

<form action="addLogicD.php" class="form-signin" method="POST">
	<h1 class="h3 mb-3 font-weight-normal">Add Patient</h1>

	<label for="inputEmail" class="sr=only">Name</label>
	<input type="text" id="name" class="form-control" placeholder="Name" name="name" required>

	<label for="inputEmail" class="sr=only">Surname</label>
	<input type="text" id="surname" class="form-control" placeholder="Surname" name="surname">

	<label for="inputEmail" class="sr=only">Specialty</label>
	<input type="text" id="username" class="form-control" placeholder="Add Specialty!" name="username">

	<label for="inputEmail" class="sr=only">Email</label>
	<input type="email" id="email" class="form-control" placeholder="Email" name="email">

	<label for="inputEmail" class="sr=only">Password</label>
	<input type="password" id="password" class="form-control" placeholder="Password" name="password">

	<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign In</button>

	<p class="mt-5 mb-3 text-muted">MediCare &copy; 2025</p>

</form>

</body>
</html>