<?php 

include_once('config.php');

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) || empty($password)){
        echo "fill all the fields";
    }else{
        $sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
        $login = $conn->prepare($sql);
        $login->bindParam(':username', $username);
        $login->bindParam(':password', $password);
        $login->execute();

        if($login->rowCount() > 0){
            $user = $login->fetch();
            // echo "Login successful";
            header("Location: sidebarA.php");
            exit();
        } else {
            echo "Invalid username or password";
        }
    }
}
?>