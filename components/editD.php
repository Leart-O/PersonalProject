<?php 

include_once("config.php");
include_once('header.php');
include_once('footer.php');


$id = $_GET['id'];

$sql = "SELECT * FROM doctor WHERE id=:id";

$prep = $conn->prepare($sql);

$prep->bindParam(':id', $id);

$prep->execute();

$data = $prep->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit</title>

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
	
	<form action="updateD.php" class="form-signin" method="POST">
	<h1 class="h3 mb-3 font-weight-normal">Update Doctor Information</h1>
	<input class="form-control" type="number" name="id"  value="<?php echo $data['id']?>" readonly>
    <input class="form-control" type="text" name="username" value="<?php echo $data['username']?>">
    <input class="form-control" type="text" name="name" value="<?php echo $data['name']?>">
    <input class="form-control" type="text" name="surname" value="<?php echo $data['surname']?>">
    <input class="form-control" type="email" name="email" value="<?php echo $data['email']?>">
	<input class="form-control" type="password" name="password" value="<?php echo $data['password']?>">

		<br><br>
		<button class="btn btn-lg btn-primary btn-block" type="submit" name="update">UPDATE</button>
       <a class="mt-5 mb-3 text-muted" href="dashboardD.php">Go Back</a>
	   <p class="mt-5 mb-3 text-muted">MediCare &copy; 2025</p>

	</form>
    
	</body>
</html>

