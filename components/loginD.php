<?php

include_once("header.php");?>

<div class="login">
    <form action="loginLogicD.php" class="form-signin" method="post">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

        <label for="inputEmail" class="sr=only">Username</label>
        <input type="text" id="username" class="form-control" placeholder="username" name="username">

        <label for="inputPassword" class="sr=only">Password</label>
        <input type="password" id="password" class="form-control" placeholder="password" name="password">


        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign In</button>

        <small>You dont have an account? <a href="signupD.php">Sign Up</a></small>

        <p class="mt-5 mb-3 text-muted">MediCare &copy; 2025</p>
    </form>

</div>

<?php include('footer.php')?>