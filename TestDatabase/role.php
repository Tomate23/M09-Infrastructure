<?php
include_once '../Includes-PHP/connection.php';

$sql = "SELECT * FROM userE WHERE nameUser='osmar' AND passwordUser=MD5('roma00');";
$result = mysqli_query($conndb,$sql);
$check = mysqli_num_rows($result);

if ($check > 0) {
        while ($row = mysqli_fetch_array($result)){
            
                echo strval($row['idRole']);
        }
}
else {
        echo "noData";
}
?>