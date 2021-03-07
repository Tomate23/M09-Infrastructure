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

    <title>Signup</title>
</head>

<body>



    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="form-block">
                                <div class="mb-4">
                                    <h3>Sign Up</h3>
                                    <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.
                                    </p>
                                    <?php
                                    if (isset($_SESSION['error'])) {
                                        $errormsg = $_SESSION['error'];
                                        echo '<center class="valid">' . $errormsg . '</center>';
                                    }
                                    ?>
                                </div>
                                <form action="../Includes-PHP/signup.inc.php" method="post">
                                    <div class="form-group first">
                                        <label for="name"></label>
                                        <input type="text" class="form-control" name="name" placeholder="Name">

                                    </div>
                                    <div class="form-group first">
                                        <label for="email"></label>
                                        <input type="text" class="form-control" name="email" placeholder="Email" required>

                                    </div>
                                    <div class="form-group">
                                        <label for="password"></label>
                                        <input type="password" class="form-control" name="password" placeholder="Password" required>

                                    </div>
                                    <div class="form-group last mb-4">
                                        <label for="re-password"></label>
                                        <input type="password" class="form-control" name="re-password" placeholder="Re-type Password" required>

                                    </div>

                                    <div class="d-flex mb-5 align-items-center">
                                        <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Agree our <a href="#">Terms and Conditions</a></span>
                                            <input type="checkbox" checked="checked" />
                                            <div class="control__indicator"></div>
                                        </label>
                                        <span class="ml-auto"><a href="./Login.php" class="forgot-pass">Sign In</a></span>
                                        <span class="ml-auto"><a href="../index.php" class="forgot-pass">Home</a></span>
                                    </div>

                                    <input type="submit" value="Register" class="btn btn-pill text-white btn-block btn-primary">

                                    <span class="d-block text-center my-4 text-muted"> or register with</span>

                                    <div class="social-login text-center">
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
    </div>


    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>

<?php
unset($_SESSION["error"]);
?>
