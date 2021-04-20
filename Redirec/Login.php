<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>

    <style>
        .valid {
            background-color: #f44336;
            text-transform: uppercase;
            color: #000;
            border: 1px solid black;
        }
    </style>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../fonts/icomoon/style.css">

    <link rel="stylesheet" href="../css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/Button.css">

    <title>Login</title>
</head>

<body>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <img src="../img/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
                    <nav>
                        <ul>
                            <li>
                                <a href="../index.php">home</a>
                                <span></span><span></span><span></span><span></span>
                            </li>
                            <li>
                                <a href="./Signup.php">SignUp</a>
                                <span></span><span></span><span></span><span></span>
                            </li>
                            <!-- <li>
                                services
                                <span></span><span></span><span></span><span></span>
                            </li>
                            <li>
                                contact
                                <span></span><span></span><span></span><span></span>
                            </li> -->
                        </ul>
                    </nav>
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>Sign In to <strong>PedralbesEvents</strong></h3>
                                <p class="mb-4">Sign in to report your events manage your information
                                </p>
                            </div>
                            <form action="../Includes-PHP/login.inc.php" method="post">

                                <?php
                                if(isset($_SESSION['error'])){
                                    $errormsg = $_SESSION['error'];
                                    echo '<center class="valid">'.$errormsg.'</center>';
                                    unset($_SESSION['error']);
                                }elseif(isset($_SESSION["errorlogin"])){
                                    $errormsg = $_SESSION['errorlogin'];
                                    echo '<center class="valid">'.$errormsg.'</center>';
                                    unset($_SESSION['error']);
                                }
                                ?>

                                <div class="form-group first">
                                    <label for="username"></label>
                                    <input type="text" class="form-control" name="username" placeholder="Username">

                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password"></label>
                                    <input type="password" class="form-control" name="password" placeholder="Password">

                                </div>

                                <div class="d-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-0"><span class="caption">Remember
                                            me</span>
                                        <input type="checkbox" checked="checked" />
                                        <div class="control__indicator"></div>
                                    </label>
                                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                                </div>

                                <input type="submit" value="Log In" class="btn text-white btn-block btn-primary">

                                <span class="d-block text-left my-4 text-muted"> or sign in with</span>

                                <div class="social-login">
                                    <a href="#" class="facebook">
                                        <span class="icon-facebook mr-3"></span>
                                    </a>
                                    <a href="#" class="twitter">
                                        <span class="icon-twitter mr-3"></span>
                                    </a>
                                    <a href="#" class="google">
                                        <span class="icon-google mr-3"></span>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>

<?php
    unset($_SESSION["error"]);
?>
