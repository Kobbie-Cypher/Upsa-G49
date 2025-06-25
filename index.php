<?php
    session_start();

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if (!isset($_SESSION['has_visited'])) {
        $_SESSION['has_visited'] = true;
        header("Location: landing.php");
        exit();
    }

    
    include('includes/dbconn.php');
    if(isset($_POST['login']))
    {
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password = md5($password);
    $stmt=$mysqli->prepare("SELECT email,password,id FROM userregistration WHERE email=? and password=? ");
        $stmt->bind_param('ss',$email,$password);
        $stmt->execute();
        $stmt -> bind_result($email,$password,$id);
        $rs=$stmt->fetch();
         $stmt->close();
        $_SESSION['id']=$id;
        $_SESSION['login']=$email;
        $uip=$_SERVER['REMOTE_ADDR'];
        $ldate=date('d/m/Y h:i:s', time());
         if($rs){
            $uid=$_SESSION['id'];
            $uemail=$_SESSION['login'];
        $ip=$_SERVER['REMOTE_ADDR'];
        $geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip;
        $addrDetailsArr = unserialize(file_get_contents($geopluginURL));
        $city = $addrDetailsArr['geoplugin_city'];
        $country = $addrDetailsArr['geoplugin_countryName'];
        $log="insert into userlog(userId,userEmail,userIp,city,country) values('$uid','$uemail','$ip','$city','$country')";
        $mysqli->query($log);
        if($log){
            header("location:student/dashboard.php");
                 }
        } else {
            echo "<script>alert('Sorry, Invalid Username/Email or Password!');</script>";
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
.navbar {
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
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
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="landing.php">
                <img src="assets/images/big/icon.png" alt="logo" srcset=""> HOSTEL HUB
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="landing.php">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="landing.php">Rooms</a></li>
                    <li class="nav-item"><a class="nav-link" href="landing.php">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="login-container">
        <div class="auth-box text-center">
            <div class="mb-3">
                <img src="assets/images/big/icon.png" alt="Logo">
            </div>
            <h3 class="mb-4 text-primary fw-bold">Student Login</h3>

            <form method="POST">
                <div class="form-group mb-3 text-start">
                    <label for="email" class="text-dark">Email Address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email"
                        required>
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

                <button type="submit" name="login" class="btn btn-dark w-100 py-2">Login</button>
            </form>

            <div class="mt-4">
                <a href="admin/index.php" class="text-danger">Go to Admin Panel</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>