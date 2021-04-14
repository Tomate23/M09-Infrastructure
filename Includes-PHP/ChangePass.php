<?php
session_start();
include_once './connection.php';

$mail = $_POST['mail'];
$pass = $_POST['pass'];
$pass2 = $_POST['repass'];


$errorPass = "PASSWORDS DON'T MATCH, Try again";

if ($_SESSION['logged']){
    $currentMail = $_SESSION["usermail"];
}

if ($pass === $pass2){
    // success
    $MD5pass = md5($pass);
    $sql = "UPDATE userE SET passwordUser = '$MD5pass' WHERE mailUser = '$currentMail';";
    mysqli_query($conndb, $sql);
    header("Location: ../Includes-PHP/exit.php");
} else {
    $_SESSION["error2"] = $errorPass;
    header("Location: ../Redirec/UpdatePass.php");
}
?>

