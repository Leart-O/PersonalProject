<?php

include_once('config.php');

if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $username = $_POST['username'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
    if (empty($name) || empty($username) || empty($surname) || empty($email)|| empty($password)) {
        echo "You need to fill all the fields";
    } else{
        $sql = "SELECT username FROM doctor WHERE username=:username";

        $tempSQL = $conn->prepare($sql);
        $tempSQL-> bindParam(':username', $username);
        $tempSQL->execute();

        if($tempSQL->rowCount() > 0){
            echo"username exists";
            header("refresh:3; url=signupD.php");
        }
        else{
            $sql = "INSERT INTO doctor (name, surname, username, email, password) VALUES (:name, :surname, :username, :email, :password)";
            $insertSql = $conn->prepare($sql);

            $insertSql->bindParam(':name', $name);
            $insertSql->bindParam(':surname', $surname);
            $insertSql->bindParam(':username', $username);
            $insertSql->bindParam(':email', $email);
            $insertSql->bindParam(':password', $password);

            $insertSql->execute();

            header("Location: sidebarP.php");
            exit();
        }
    }

}

?>