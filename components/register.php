<?php

include_once('config.php');

if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $username = $_POST['username'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($name) || empty($username) || empty($surname) || empty($email)|| empty($password)) {
        echo "You need to fill all the fields";
    } else{
        $sql = "SELECT username FROM patient WHERE username=:username";
        // $sql = "SELECT password FROM patient WHERE password=:password";

        $tempSQL = $conn->prepare($sql);
        $tempSQL-> bindParam(':username', $username);
        // $tempSQL-> bindParam(':password', $password);
        $tempSQL->execute();


        if($tempSQL->rowCount() > 0){
            echo"username and password exist";
            header("refresh:3; url=signup.php");
        }
        else{
            $sql = "INSERT INTO patient (name, username, surname, email, password) VALUES (:name, :surname, :username, :email, :password)";
            $insertSql = $conn->prepare($sql);

            $insertSql->bindParam(':name', $name);
            $insertSql->bindParam(':surname', $surname);
            $insertSql->bindParam(':username', $username);
            $insertSql->bindParam(':email', $email);
            $insertSql->bindParam(':password', $password);

            $insertSql->execute();

            echo"Data is saved";
        }
    }

}

?>