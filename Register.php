<?php
session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, a
    maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/all.css" />
    <link rel="stylesheet" href="css/main.css" />

    <!--[if it IE 9]-->
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <!--[endif]-->
</head>

<body>

    <div class="container register-form">
        <div class="form">
            <div class="note">
                <p>Registration</p>
                <a href="login.php" class="regbtn">Login</a>
            </div>

            <div class="form-content">
                <div class="row">
                    <div class="col-md-12">
                        <form action="dbconnect.php" method="POST">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Your Name *" value=""
                                    autocomplete="off" required />
                                <input type="hidden" name="register" class="form-control" placeholder="Your Email *"
                                    value="register" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" placeholder="Phone Number *"
                                    value="" autocomplete="off" required />
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" value=""
                                    autocomplete="off" required />
                            </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Your Password *"
                                value="" autocomplete="off" required />
                        </div>
                        <div class="form-group">
                            <input type="password" name="confirmpass" class="form-control"
                                placeholder="Confirm Password *" value="" autocomplete="off" required />
                        </div>
                    </div>
                </div>
                <button type="submit" class="btnSubmit">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!--
    <i class="fab fa-angrycreative "></i>
    
    <i class="fas fa-ambulance "></i><i class="fab fa-connectdevelop fa-4x"></i>
-->

    <!-- external scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>


</body>

</html>