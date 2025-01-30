<?php include("header2.php"); ?>
<?php include("footer2.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-Doctor</title>
    <style>

        body{
            background-color: #ddfffa;
        }

        .custom-divider {
            border-top: 0.25px solid gray;
            width: 100%;
        }
        
        .bg-img {
            border: 1px solid teal;
            border-radius: 25px;
            background: url(img/doctor.png);
            background-position: top;
            background-repeat: repeat;
            padding: 20px;
            width: 1550px;
            height: 300px;
        }

        .text {
            text-align: center;
            padding: 20px;
            border: 1px solid #779da3;
            border-radius: 25px;
            background-color: #9dd0d4;
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

                <div class="bg-img">
                    <h1>Hello Doctor!</h1>
                    <h4>This is your dedicated page in where you can control your website.</h4>
                </div>

                <br><br><br><br>

                <div class="text">
                    <h1>What can you do as a Doctor?</h1>
                    <h6>As a doctor, you have access to a range of tools to manage your patients, appointments, and clinical documentation.</h6>
                    <p>As a Doctor, you play a central role in providing care and maintaining patient records. Your key responsibilities and features include: <br>
                        <ol><b>Patient Management:</b> View and manage your patient list, track their medical history, and monitor progress over time. <br>
                        <b>Appointment Management:</b> Access your appointment schedule, confirm, reschedule, or cancel appointments, and keep track of patient visits. <br>
                        <b>Write and Update Patient Charts:</b> Document diagnosis, prognosis, treatment plans, and prescriptions for each patient visit. <br>
                        <b>Clinical Notes:</b> Record important notes during patient visits for ongoing care and follow-up. <br>
                        <b>Manage Prescriptions:</b> Issue prescriptions and provide medical recommendations for patients as needed. <br></ol>
                        Your role ensures accurate medical documentation and effective patient care. With these tools, you can streamline your workflow and offer the best possible care for your patients.</p>
                </div>


            </div>
    </div>
</body>
</html>