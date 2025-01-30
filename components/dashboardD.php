<?php include("header2.php"); ?>
<?php include("footer2.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-Admin</title>
    <style>
        .custom-divider {
            border-top: 0.25px solid gray;
            width: 100%;
        }

		table {
			width: 100%;
			border-collapse: collapse;
			padding-right: 10px;
			margin: 25px 0;
			font-size: 18px;
			text-align: left;
		}

		th, td {
			padding: 12px;
		}

		th {
			background-color: #f2f2f2;
		}

		tr:hover {
			background-color: #f5f5f5;
		}

		a {
			color: #3498db;
			text-decoration: none;
		}

		a:hover {
			text-decoration: underline;
		}
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none text-white">
                <i class="fs-4 bi-hospital me-2"></i><span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <hr class="dropdown-divider custom-divider">
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="sidebarA.php" class="nav-link align-middle px-0 text-white">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">See your users</span> </a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                        <li class="w-100">
                                <a href="dashboardP.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">See Patients</span></a>
                            </li>
                            <li>
                                <a href="dashboardD.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">See Doctors</span></a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Add users</span> </a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                        <li class="w-100">
                                <a href="addP.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">Add a Patient</span></a>
                            </li>
                            <li>
                                <a href="addD.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">Add a Doctor</span></a>
                            </li>
                        </ul>
                    </li>
                </ul> 
                <div class="dropdown pb-4">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fs-4 ms-1 bi-person-circle"></i>
                        <span class="d-none d-sm-inline mx-1">Account</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
                    </ul>
                </div> 
            </div>
            </div>
			<div class="col py-3">

			<h1>Doctors List:</h1>
			<h6>Here you can see all of the doctors that are a part of your website and you can manoeuvre with them <br> like update their info or delete a selected user.</h6>
			
			<?php 

		include_once('config.php');
		include('header.php');
		include('footer.php');
		$getUsers = $conn->prepare("SELECT * FROM doctor");

		$getUsers->execute();

		$users = $getUsers->fetchAll();

	 ?>
<table class="table">
	
	<thead class="table-dark">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Surname</th>
			<th>Specialty</th>
			<th>Email</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($users as $user): ?>
			<tr>
				<td><?= htmlspecialchars($user['id']) ?></td>
				<td><?= htmlspecialchars($user['name']) ?></td>
				<td><?= htmlspecialchars($user['surname']) ?></td>				
				<td><?= htmlspecialchars($user['username']) ?></td>
				<td><?= htmlspecialchars($user['email']) ?></td>
				<td>
					<a href="deleteD.php?id=<?= $user['id'] ?>">Delete</a> |
					<a href="editD.php?id=<?= $user['id'] ?>">Update</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
</div>  
</div>

</body>
</html>
