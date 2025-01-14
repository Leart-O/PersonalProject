<?php include("header.php");?>

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
        
        .content p{
            text-align: center;
            margin-bottom: -5px;
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
            <h1>Welcome</h1>
            <p>If you are not feeling well or need to make an appointment/followup with your doctor</p>
            <p>then sign up if you don't already have an account with us or sign in if you do!</p>
            <p>We're here for your every need.</p>
        </div>
    </div>
   
</body>
</html>