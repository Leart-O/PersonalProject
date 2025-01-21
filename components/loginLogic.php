<?php 

include_once('config.php');

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) || empty($password)){
        echo "fill all the fields";
    }else{
        $sql = "SELECT * FROM patient WHERE username = :username, password = :password";
        // $sql = "SELECT * FROM patient WHERE password = :password";
        $login = $conn->prepare($sql);
        $login->bindParam(':username', $username);
        $login->bindParam(':password', $password);
        //Problem with id not comunicating/is not right.
        $login->execute();

        if($tempSQL->rowCount() > 0){
            $sql = $insertSQL->fetch();
        }
    }
}



?>