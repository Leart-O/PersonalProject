<?php include 'db.php'; 
    include("header.php");
    include("footer.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body{
            background: url("img/signup.png") no-repeat center center/cover;
            height: 100%;
            position: relative;
        }

        .form{
            position: relative;
            top:200px;
        }
</style>
</head>
<body>
    <div class="form">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="text-center">Register</h2>
                        <?php
                        // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        //     $name = $_POST['name'];
                        //     $surname = $_POST['surname'];
                        //     $email = $_POST['email'];
                        //     $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

                        //     $sql = "INSERT INTO pp (name, surname, email, password) VALUES (?, ?, ?, ?)";
                        //     $stmt = $pdo->prepare($sql);
                        //     $stmt->bind_param('sss', $name, $surname, $email, $password);

                        //     if ($stmt->execute()) {
                        //         echo "<div class='alert alert-success'>Registration successful! <a href='login.php'>Login here</a>.</div>";
                        //     } else {
                        //         echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
                        //     }
                        // }
                        ?>
                        <form method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="surname" class="form-label">Surname</label>
                                <input type="text" name="surname" id="surname" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
