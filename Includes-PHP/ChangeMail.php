<?php
session_start();
include_once './connection.php';

$mail = $_POST['mail'];
$mail2 = $_POST['remail'];



$errorMatch = "MAILS DON'T MATCH, Try again";
$errorMail = "INVALID MAIL ADDRESS";

if ($_SESSION['logged']){
    $currentMail = $_SESSION["usermail"];
}

$validEmail = explode("@", $mail);
if ($validEmail[1] != "inspedralbes.cat") {
    $_SESSION["errorMAIL"] = $errorMail;
    header("Location: ../Redirec/UpdateMail.php");
} else {
    if ($mail == $mail2){
        $sql = "UPDATE userE SET mailUser = '$mail' WHERE mailUser = '$currentMail';";
        mysqli_query($conndb, $sql);
        header("Location: ../Includes-PHP/exit.php");
    }else{
        $_SESSION['errorMAIL'] = $errorMatch;
        header("Location: ../Redirec/UpdateMail.php");
    }
}