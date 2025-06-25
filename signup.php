<?php
session_start();
 error_reporting(E_ALL);
    ini_set('display_errors', 1);
include('includes/dbconn.php');

if (isset($_POST['submit'])) {
    $regno = $_POST['regno'];
    $emailid = $_POST['email'];
    $password_raw = $_POST['password'];
if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/', $password_raw)) {
    echo "<script>alert('Password must be strong: min 8 chars, uppercase, lowercase, number, special char.'); window.history.back();</script>";
    exit();
}
$password = md5($password_raw); // Consider using password_hash() instead


    

    // Check if regNo or email already exists
    $checkQuery = "SELECT * FROM userregistration WHERE regNo = ? OR email = ?";
    $stmt = $mysqli->prepare($checkQuery);
    $stmt->bind_param("ss", $regno, $emailid);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetch the row to determine which one exists
        $row = $result->fetch_assoc();
        if ($row['regNo'] == $regno) {
            echo "<script>alert('Registration number already exists!'); window.history.back();</script>";
        } elseif ($row['email'] == $emailid) {
            echo "<script>alert('Email already exists!'); window.history.back();</script>";
        }
    } else {
        // Proceed with insert
        $insertQuery = "INSERT INTO userregistration (regNo, email, password) VALUES (?, ?, ?)";
        $stmt = $mysqli->prepare($insertQuery);
        $stmt->bind_param("sss", $regno, $emailid, $password);
        if ($stmt->execute()) {
            header("Location: index.php");
            exit();
        } else {
            echo "<script>alert('Something went wrong. Please try again later.'); window.history.back();</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hostel Management System - Login</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/big/icon.png">

    <!-- Bootstrap 5 & Custom CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/style.min.css" rel="stylesheet">

    <style>
    body {
        background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
        font-family: 'Poppins', sans-serif;
    }

    .auth-box {
        max-width: 450px;
        background: #fff;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    }

    .form-control {
        border-radius: 8px;
    }

    .btn-dark {
        background-color: #0d6efd;
        border-color: #0d6efd;
        border-radius: 8px;
        transition: all 0.3s ease-in-out;
    }

    .btn-dark:hover {
        background-color: #0b5ed7;
        border-color: #0b5ed7;
    }

    .auth-box img {
        width: 40px;
    }

    .form-group label {
        font-weight: 500;
    }

    .login-container {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .forgot-password {
        font-size: 14px;
        color: #0d6efd;
        text-decoration: none;
        transition: 0.3s;
    }

    .forgot-password:hover {
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        .auth-box {
            padding: 30px;
            max-width: 90%;
        }
    }
    </style>

</head>

<body>

    <div class="login-container">
        <div class="auth-box text-center">
            <div class="mb-1">
                <img src="assets/images/big/icon.png" alt="Logo">
            </div>
            <h3 class="mb-4 text-primary fw-bold">Create Account</h3>

            <form method="POST">
                <div class="form-group mb-1 text-start">
                    <label for="regno" class="text-dark">Student ID</label>
                    <input type="text" class=" form-control" name="regno" id="regno" placeholder="Enter Student ID"
                        required>
                </div>
                <div class="form-group mb-1 text-start">
                    <label for="email" class="text-dark">Email Address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email"
                        required>
                </div>


                <div class="form-group mb-1 text-start">
                    <label for="password" class="text-dark">Password</label>
                    <input type="password" class="form-control" name="password" id="password"
                        placeholder="Enter your password" required>
                </div>
                <div class="form-group mb-1 text-start">
                    <label for="password" class="text-dark">Repeat Password</label>
                    <input type="password" name="cpassword" id="cpassword" placeholder="Enter Confirmation Password"
                        required="required" class="form-control">
                </div>

                <button type="submit" name="submit" class="btn btn-dark w-100 py-2">Signup</button>
            </form>

            <div class="mt-4">
                <a href="index.php" class="text-danger">Have account? Login</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>