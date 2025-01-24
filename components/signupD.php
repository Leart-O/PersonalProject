<?php
include_once('header.php');

?>

<div class="signup">
    <form action="signupLogicD.php" class="form-signin" method="post">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

        <label for="inputEmail" class="sr=only">Name</label>
        <input type="text" id="name" class="form-control" placeholder="Name" name="name" required>

        <label for="inputEmail" class="sr=only">Surname</label>
        <input type="text" id="surname" class="form-control" placeholder="Surname" name="surname">

        <label for="inputEmail" class="sr=only">Username</label>
        <input type="text" id="username" class="form-control" placeholder="Username" name="username">

        <label for="inputEmail" class="sr=only">Email</label>
        <input type="email" id="email" class="form-control" placeholder="Email" name="email">

        <label for="inputEmail" class="sr=only">Password</label>
        <input type="password" id="password" class="form-control" placeholder="Password" name="password">

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign In</button>

        <small>Already have an account? <a href="loginD.php">Log in</a></small>

        <p class="mt-5 mb-3 text-muted">MediCare &copy; 2025</p>

    </form>
</div>

<?php include('footer.php')?>