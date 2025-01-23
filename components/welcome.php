<?php include("header2.php");
       include("footer2.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .background{
            background: url("img/index.png") no-repeat center center/cover;
            height: 100%;
            position: relative;
        }

        .content {
            position: relative;
            z-index: 2; 
            color: white;
            top: 50%; 
            transform: translateY(-50%);
        }

       

        .overlay {
            background-color: rgba(0, 0, 0, 0.5); 
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 1; 
        }

        h1{
            text-align: center;
            color: white;
            
        } 
        
        h2{
            position: fixed;
            left: 100px;
            bottom: 480px;
            
        }
        
        .login{
            position: fixed;
            left: 1500px;
            bottom: 480px;
        }

        .content p{
            text-align: center;
            margin-bottom: -5px;
            font-size: 25;
        }

        .content #btn-1{
            position: fixed;
            left: 750px;
            margin-top: 10px;
        }

        nav img{ 
            height: 80px;
            width: 80px;
            margin-top: -23%;
            margin-left: 5px;
        }
    </style>
</head>
<body>
    <div class="background">
        <div class="overlay"></div>     
        <div class="content">
            <nav>
                <img src="img/logo.png" alt="logo">
            </nav>
            <h2>MediCare</h2>
                    <div class="login">
                        <div class="btn-group">
                         <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                         Action  
                        </button>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Separated link</a></li>
        </ul>
        </div>
                    </div>
                <h1>Welcome</h1>
                <p>If you are not feeling well or need to make an appointment/followup with your doctor</p>
                <p>then sign up if you don't already have an account with us or sign in if you do!</p>
                <p>We're here for your every need.</p>
                <button type="button" class="btn btn-primary" id="btn-1">Book an Appointment!</button>
        </div>
    </div>

</body>
</html>