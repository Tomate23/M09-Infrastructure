<html>
<head>
        <title>Incidencias</title>
</head
>
<body>
<?php
include_once '../Includes-PHP/connection.php';
$sql = "Select * from room";
$result = mysqli_query($conndb,$sql);
$check = mysqli_num_rows($result);

if ($check > 0) {
        while ($row = mysqli_fetch_array($result)){
                echo "<br>";
                echo $row['idRoom'];
                echo "<br>";
                echo $row['floorRoom'];
                echo "<br>";
                //echo $row['label'];
                //echo "<br>";
        }
}
else {
        echo "noData";
}
?>
</body>
</html>

