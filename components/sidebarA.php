<?php include("header2.php"); ?>
<?php include("footer2.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-Admin</title>
    <style>
        
        body{
            background-color: #e0ddee;
        }

        .custom-divider {
            border-top: 0.25px solid gray;
            width: 100%;
        }

        .bg-img {
            border: 1px solid #dac9f8;
  border-radius: 25px;
  background: url(img/admin.png);
  background-position: top;
  background-repeat: repeat;
  padding: 20px;
  width: 1550px;
  height: 300px;
}

.text {
    text-align: center;
    padding: 20px;
    border: 1px solid #7878ea;
    border-radius: 25px;
    background-color: #e0ddee;
    margin-left: 15%;
    width: 1050px;
    height: 365px;
}
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark" class="sidebar">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="#" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none text-white">
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

                <div class="bg-img">
                    <h1>Hello Administrator!</h1>
                    <h4>This is your dedicated page in where you can control your website.</h4>
                </div>

                <br><br><br><br>

                <div class="text">
                    <h1>What can you do?</h1>
                    <h6>As an administrator, you have the power to control the website. You can add patients and doctors, see the list of patients and doctors, and many more.</h6>
                       <p>As an Administrator, you have full control over the platform's functionality, ensuring smooth and secure operation. Your key responsibilities include: <br>
                        <ol><b>User Management:</b> Add, update, and remove patient and doctor profiles. <br>
                        <b>Monitor Activity:</b> Track site usage and identify areas for improvement. <br>
                        <b>Customize Settings:</b> Adjust site preferences to meet user needs. <br>
                        <b> Maintain Security:</b> Oversee user permissions and monitor site security. <br>
                        <b>Facilitate Communication:</b> Ensure efficient interaction between patients, doctors, and other stakeholders. <br></ol>
                        Your role is essential in maintaining a seamless, secure, and user-friendly experience for all platform users.</p>
                                   
                    </div>

            </div>
        </div>

</body>
</html>