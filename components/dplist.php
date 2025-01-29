<?php include("header2.php"); ?>
<?php include("footer2.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient List</title>
    <style>
        .custom-divider {
            border-top: 0.25px solid gray;
            width: 100%;
        }
    </style>
</head>
<body>
</html>

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
                        <a href="sidebarD.php" class="nav-link align-middle px-0 text-white">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="dpList.php" class="nav-link px-0 align-middle text-white">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Patients</span></a>
                    </li>
                    </li>
                    <li>
                        <a href="dNotes.php" class="nav-link px-0 align-middle text-white">
                            <i class="fs-4 bi-journal-medical"></i> <span class="ms-1 d-none d-sm-inline">Treatment Notes</span> </a>
                    </li>
                    <li>
                        <a href="appointment.php" class="nav-link px-0 align-middle text-white">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Appointment Management</span> </a>
                    </li>
                </ul>
                <hr>
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

            <h1>Patient List:</h1>
            <h6>Here you can see all of the patients and their contact info</h6>
            <?php 

            		include_once('config.php');
            		include('header.php');
            		include('footer.php');
            		$getUsers = $conn->prepare("SELECT * FROM patient");

            		$getUsers->execute();

            		$users = $getUsers->fetchAll();

            	 ?>
            <table class="table">
            	<thead class="table-dark">
            		<tr>
            			<th>Name</th>
            			<th>Surname</th>
            			<th>Email</th>
            		</tr>
            	</thead>
            	<tbody>
            		<?php foreach ($users as $user): ?>
            			<tr>
            				<td><?= htmlspecialchars($user['name']) ?></td>
            				<td><?= htmlspecialchars($user['surname']) ?></td>
            				<td><?= htmlspecialchars($user['email']) ?></td>
            			</tr>
            		<?php endforeach; ?>
            	</tbody>
            </table>
            </div>
    </div>
</body>