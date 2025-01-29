<?php
session_start();
if (!isset($_SESSION['appointments'])) {
    $_SESSION['appointments'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['appointment'])) {
        $patient_name = $_POST['patient_name'];
        $appointment_time = $_POST['appointment_time'];

        $_SESSION['appointments'][] = [
            'patient_name' => $patient_name,
            'appointment_time' => $appointment_time
        ];
    } elseif (isset($_POST['delete'])) {
        $index = $_POST['index'];
        unset($_SESSION['appointments'][$index]);
        $_SESSION['appointments'] = array_values($_SESSION['appointments']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor - Appointments</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .appointment {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
            height: 100vh;
        }

        .form-appointment {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }

        .form-appointment .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px;
        }

        .form-appointment .form-control:focus {
            z-index: 2;
        }

        .form-appointment input[type="text"],
        .form-appointment input[type="datetime-local"] {
            margin-bottom: 10px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-appointment button {
            margin-top: 10px;
        }

        .appointments-table {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 18px;
            text-align: left;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <div class="appoint">
    <div class="appointment">
        <form action="" method="POST" class="form-appointment">
            <h1 class="h3 mb-3 font-weight-normal">Book an Appointment</h1>
            <label for="patient_name" class="sr-only">Patient Name</label>
            <input type="text" id="patient_name" class="form-control" placeholder="Patient Name" name="patient_name" required>
            <label for="appointment_time" class="sr-only">Appointment Time</label>
            <input type="datetime-local" id="appointment_time" class="form-control" name="appointment_time" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="appointment">Book Appointment</button>
            <br><br><br><br>
            <p><b>Scroll to see your appointments!</b></p>
        </form>

        

    </div>

</div>
  
    <div class="container mt-5 appointments-table">
        <h2>Upcoming Appointments:</h2>
        <?php
        if (isset($_SESSION['appointments']) && !empty($_SESSION['appointments'])) {
            echo '<table class="table">';
            echo '<thead><tr><th>Patient Name</th><th>Appointment Time</th><th>Action</th></tr></thead>';
            echo '<tbody>';
            foreach ($_SESSION['appointments'] as $index => $appointment) {
                echo "<tr><td>" . $appointment['patient_name'] . "</td><td>" . $appointment['appointment_time'] . "</td>";
                echo '<td><form action="" method="POST" style="display:inline;"><input type="hidden" name="index" value="' . $index . '"><button type="submit" name="delete" class="btn btn-danger btn-sm">Delete</button></form></td></tr>';
            }
            echo '</tbody></table>';
        } else {
            echo "<p>No appointments booked yet.</p>";
        }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
