<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Admin Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<body style="background-color:#f7c615;">
    <?php include('dbconfig.php'); ?>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                <form class="login100-form validate-form" method="POST">
                    <span class="login100-form-title p-b-33">Admin Login</span>
                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>
                    <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>
                    <div class="container-login100-form-btn m-t-20">
                        <button type="submit" class="login100-form-btn" name="commit">Sign in</button>
                    </div>

                    <br>

                    <?php
                    if (isset($_POST['commit'])){
                        session_start();
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $query = "SELECT * FROM `admin` WHERE username='$username' AND password='$password'";
                        
                        $result = mysqli_query($conn,$query)or die(mysqli_error());
                        $num_row = mysqli_num_rows($result);
                        $row=mysqli_fetch_array($result);

                        if( $num_row > 0 ) {?>
                            <div class="alert alert-success">Access Granted</div>
                            <?php

                            $_SESSION['username']=$username;
                            header('location: adminPanel.php');
                        }
                        else{ ?>
                            <div class="alert alert-danger">Access Denied</div>
                            <?php
                    }}
                    ?>

                </form>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <script src="js/main.js"></script>
</body>

<!-- Mirrored from colorlib.com/etc/lf/Login_v19/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Mar 2021 17:53:57 GMT -->

</html>