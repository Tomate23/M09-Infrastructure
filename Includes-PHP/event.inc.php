<?php
session_start();
include_once 'connection.php';

$user           = $_POST['eventName'];
$mail           = $_POST['mailEvent'];
$eventLabel     = $_POST['deviceLabel'];
$eventDevice    = $_POST['options'];
$eventdate      = $_POST['dateofevent'];
$eventfloor     = $_POST['floor'];
$eventroom      = $_POST['room'];
$gravity        = $_POST['options2'];
$eventdecrip    = $_POST['descrip'];

$errorMSG = "YOU HAVEN'T LOGED-IN";

$query = "SELECT idUser FROM userE WHERE nameUser = '$user';";
$result = mysqli_query($conndb,$query);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0){
    while ($row = mysqli_fetch_array($result)){
        $idUser=$row['idUser'];
    }
}

if ($_SESSION['logged'] == true) {
    $sql = "INSERT INTO events (userEvento,mailEvento,device,eventDate,descripEvent,importanceEvent,idRoom,floorRoom,label,idUser) VALUES ('$user','$mail','$eventDevice','$eventdate','$eventdecrip','$gravity','$eventroom','$eventfloor','$eventLabel','$idUser');";
    mysqli_query($conndb, $sql);
    echo "<br>";
    echo $user;
    echo "<br>";
    echo $mail;
    echo "<br>";
    echo $eventLabel;
    echo "<br>";
    echo $eventDevice;
    echo "<br>";
    echo $eventdate;
    echo "<br>";
    echo $eventfloor;
    echo "<br>";
    echo $eventroom;
    echo "<br>";
    echo $gravity;
    echo "<br>";
    echo $eventdecrip;
} else {
    $_SESSION["errorlogin"] = $errorMSG;
    header("Location: ../Redirec/HardwareForm2.php");
}
