<?php
    session_start();
    include('../includes/dbconn.php');
    if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $password = md5($password);
    $stmt=$mysqli->prepare("SELECT username,email,password,id FROM admin WHERE (userName=?|| email=?) and password=? ");
		$stmt->bind_param('sss',$username,$username,$password);
		$stmt->execute();
		$stmt -> bind_result($username,$username,$password,$id);
		$rs=$stmt->fetch();
		$_SESSION['id']=$id;
		$uip=$_SERVER['REMOTE_ADDR'];
		$ldate=date('d/m/Y h:i:s', time());
		if($rs){
			header("location:dashboard.php");
				} else {
					echo "<script>alert('Invalid Username/Email or password');</script>";
				}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hostel Management System - Admin Login</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/big/icon.png">

    <!-- Bootstrap 5 & Custom CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../dist/css/style.min.css" rel="stylesheet">

    <style>
    body {
        background: linear-gradient(to right, #141e30, #243b55);
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

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
        border-radius: 8px;
        transition: all 0.3s ease-in-out;
    }

    .btn-danger:hover {
        background-color: #bb2d3b;
        border-color: #bb2d3b;
    }

    .auth-box img {
        width: 60px;
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
        color: #dc3545;
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
            <div class="mb-3">
                <img src="../assets/images/big/icon.png" alt="Logo">
            </div>
            <h3 class="mb-4 text-danger fw-bold">Admin Login</h3>

            <form method="POST">
                <div class="form-group mb-3 text-start">
                    <label for="username" class="text-dark">Email or Username</label>
                    <input type="text" class="form-control" name="username" id="username"
                        placeholder="Enter your email or username" required>
                </div>

                <div class="form-group mb-3 text-start">
                    <label for="password" class="text-dark">Password</label>
                    <input type="password" class="form-control" name="password" id="password"
                        placeholder="Enter your password" required>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="mx-2">
                        <input type="checkbox" id="rememberMe">
                        <label for="rememberMe">Remember me</label>
                    </div>
                    <a href="#" class="forgot-password">Forgot Password?</a>
                </div>

                <button type="submit" name="login" class="btn btn-danger w-100 py-2">Login</button>
            </form>

            <div class="mt-4">
                <a href="../index.php" class="text-danger">Go Back</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>