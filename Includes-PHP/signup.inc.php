<?php
session_start();
include_once './connection.php';

$name = $_POST['name'];
$mail = $_POST['email'];
$pass = $_POST['password'];
$pass2 = $_POST['re-password'];

$errorLog = "INVALID EMAIL";
$errorPass = "PASSWORDS DON'T MATCH";

// let's validate the allowed email inspedralbes.cat
$validEmail = explode("@", $mail);
if ($validEmail[1] != "inspedralbes.cat") {
    $_SESSION["error"] = $errorLog;
    header("Location: ../Redirec/signup.php");
} else {
    if ($pass === $pass2) {
        // success
        $sql = "INSERT INTO usere (nameUser,mailUser,passwordUser) VALUES ('$name','$mail', MD5('$pass'))";
        mysqli_query($conndb, $sql);
        header("location: ../index.php?=successSignUp");
    } else {
        $_SESSION["error"] = $errorPass;
        header("Location: ../Redirec/signup.php");
    }
}
