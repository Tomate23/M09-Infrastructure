<?php
session_start();
include_once './connection.php';

$RoomID = $_POST['roomid'];
$RoomFloor = $_POST['floor'];

$errorMAX = "ERROR: Max Floor is 4";
$errorMIN = "ERROR: Min Floor is -2";

if($RoomFloor > 4){
    $_SESSION["error"] = $errorMAX;
    header("Location: ../Redirec/AddRoom.php");
}elseif($RoomFloor < -2){
    $_SESSION["error"] = $errorMIN;
    header("Location: ../Redirec/AddRoom.php");
}else{
    $sql = "INSERT INTO room (idRoom,floorRoom) VALUES ('$RoomID','$RoomFloor');";
    mysqli_query($conndb, $sql);
    header("Location: ../index.php");
}