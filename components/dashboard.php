<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style>
		
		table
		{
			border: 1px solid black;
		}

		tr,td,th
		{
			border: 1px solid black;
			
		}
		table,tr,td
		{
			border-collapse: collapse;
		}
		td
		{
			padding: 10px;
		}

	</style>
</head>
<body>


	<?php 

		include_once('config.php');

		$getUsers = $conn->prepare("SELECT * FROM patient");

		$getUsers->execute();

		$users = $getUsers->fetchAll();

	 ?>


	 <table>
		<thead>
			
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Name</th>
				<th>Surname</th>
				<th>Email</th>
				<th>Update</th>
			</tr>
	</thead>


	 	<?php 

	 		foreach ($users as $user ) {
			
		?>
			<tr> 
				<td> <?= $user['id'] ?> </td>
				<td> <?= $user['username'] ?> </td>
				<td> <?= $user['name']  ?> </td> 
				<td> <?= $user['surname']  ?> </td> 
				<td> <?= $user['email']  ?> </td>
				<td> <?= $user['password']  ?> </td>
				<td> <?= "<a href='deleteP.php?id=$user[id]'> Delete</a>| <a href='editP.php?id=$user[id]'> Update </a>"?></td>

			</tr>
		
		<?php 

			}

	 	 ?>


	 </table>

	 <a href="addP.php">Add User</a>

	 <?php 

		include_once('config.php');

		$getUsers = $conn->prepare("SELECT * FROM doctor");

		$getUsers->execute();

		$users = $getUsers->fetchAll();

	 ?>


	 <table>
		<thead>
			
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Name</th>
				<th>Surname</th>
				<th>Email</th>
				<th>Update</th>
			</tr>
	</thead>


	 	<?php 

	 		foreach ($users as $user ) {
			
		?>
			<tr> 
				<td> <?= $user['id'] ?> </td>
				<td> <?= $user['username'] ?> </td>
				<td> <?= $user['name']  ?> </td> 
				<td> <?= $user['surname']  ?> </td> 
				<td> <?= $user['email']  ?> </td>
				<td> <?= $user['password']  ?> </td>
				<td> <?= "<a href='deleteD.php?id=$user[id]'> Delete</a>| <a href='editD.php?id=$user[id]'> Update </a>"?></td>

			</tr>
		
		<?php 

			}

	 	 ?>


	 </table>

	 <a href="addD.php">Add User</a>
	
</body>
</html>