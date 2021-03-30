<?php
session_start();
include_once './connection.php';

$user           = $_POST['eventName'];
$mail           = $_POST['mailEvent'];
$eventLabel     = $_POST['deviceLabel'];
$eventDevice    = $_POST['options'];
$eventdate      = $_POST['dateofevent'];
$eventroom      = $_POST['optionsroom'];
$gravity        = $_POST['options2'];
$eventdecrip    = $_POST['descrip'];

// Slecting the room floor by the room id in the form
$queryRoom = "select floorRoom from room where idRoom='$eventroom';";
$resultRoom = mysqli_query($conndb,$queryRoom);
$resultCheckRoom = mysqli_num_rows($resultRoom);

if ($resultCheckRoom > 0){
    while ($rowRoom = mysqli_fetch_array($resultRoom)){
        $eventfloor = $rowRoom['floorRoom'];
    }
}

$errorLog = "YOU HAVEN'T LOGED-IN";
$erroRoom = "Invalid Room ID";

// Code to get the userID of who is making the events report
$query = "SELECT idUser FROM userE WHERE nameUser = '$user';";
$result = mysqli_query($conndb,$query);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0){
    while ($row = mysqli_fetch_array($result)){
        $idUser=$row['idUser'];
    }
}

// Code to get a valid idRoom, this has to be in the DDBB
$query2 = "SELECT * FROM room;";
$result2 = mysqli_query($conndb,$query2);
$resultCheck2 = mysqli_num_rows($result2);

if ($resultCheck2 > 0){

    while ($row2 = mysqli_fetch_array($result2)){

        if (in_array("$eventroom",$row2)){
		if ($_SESSION['logged'] == true) {
                $sql = "INSERT INTO events (userEvento,mailEvento,device,eventDate,descripEvent,importanceEvent,idRoom,floorRoom,label,idUser) VALUES ('$user','$mail','$eventDevice','$eventdate','$eventdecrip','$gravity','$eventroom','$eventfloor','$eventLabel','$idUser')";
                mysqli_query($conndb, $sql);
                include '../Alerts/descripevent.php';
            }else {
                $_SESSION["errorlogin"] = $errorLog;
                header("Location: ../Redirec/Login.php");
            }
        }else{
            echo "Unknown ERROR";
            
            
        }
        
    }
} 
?>
