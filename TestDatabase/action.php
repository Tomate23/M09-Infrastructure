<?php
include_once '../Includes-PHP/connection.php';

$idclase = $_POST['fname'];
$piso = $_POST['lname'];

$sql = "INSERT INTO room (idRoom,floorRoom) VALUES ('$idclase','$piso');";
$result = mysqli_query($conndb,$sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
        echo "Consulta exitosa!!! DE LOCOSSSS";
}
?>
