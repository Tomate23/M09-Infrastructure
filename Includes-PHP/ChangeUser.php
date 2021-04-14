<?php
session_start();
include_once './connection.php';


$name = $_POST['name'];
$name2 = $_POST['rename'];


$errorname = "NAMES DON'T MATCH, Try again";

if ($_SESSION['logged']){
    $currentUser = $_SESSION["username"];
    $currentMail = $_SESSION["usermail"];
}

if ($name === $name2){
    // success
    $sql = "UPDATE userE SET nameUser = '$name' WHERE mailUser = '$currentMail';";
    mysqli_query($conndb, $sql);
    header("Location: ../Includes-PHP/exit.php");
}else{
    $_SESSION["errorname"] = $errorname;
    header("Location: ../Redirec/UpdateUser.php");
}