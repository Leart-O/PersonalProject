<?php include("header2.php"); ?>
<?php include("footer2.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-Patient</title>
    <style>

        body {
            background-color: #cff6f2;
        }

        .custom-divider {
            border-top: 0.25px solid gray;
            width: 100%;
        }

        .bg-img {
            border: 1px solid green;
            border-radius: 25px;
            background: url(img/patient.png);
            background-position: top;
            background-repeat: repeat;
            padding: 20px;
            width: 1550px;
            height: 300px;
        }

        .text {
            text-align: center;
            padding: 20px;
            border: 1px solid #1b8171;
            border-radius: 25px;
            background-color: #71d6cc;
            margin-left: 15%;
            width: 1050px;
            height: 365px;
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
                        <a href="sidebarP.php" class="nav-link align-middle px-0 text-white">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="pdList.php" class="nav-link px-0 align-middle text-white">
                            <i class="fs-4 bi-person-lines-fill"></i> <span class="ms-1 d-none d-sm-inline">Doctor Contact</span></a>
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

                <h1>Doctor List:</h1>
            <h6>Here you can see all of the doctors and their contact info</h6>
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
</html>