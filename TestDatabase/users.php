<html>
<head>
	<title>Users</title>
</head
>
<body>
<?php
include_once '../Includes-PHP/connection.php';
$sql = "Select * from userE";
$result = mysqli_query($conndb,$sql);
$check = mysqli_num_rows($result);

if ($check > 0) {
	while ($row = mysqli_fetch_array($result)){
		echo "<br>";
		echo $row['nameUser'];
		echo "<br>";
		echo $row['mailUser'];
		echo "<br>";
		echo $row['passwordUser'];
		echo "<br>";	
	}
}
else {
	echo "noData";
}
?>
</body>
</html>
