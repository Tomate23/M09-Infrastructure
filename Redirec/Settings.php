<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Lato);
body {
  display: flex;
  height: 100vh;
  justify-content: center;
  align-items: center;
  text-align: center;
  background: #1A1E23;
}

ul {
  display: flex;
  flex-direction: column;
  align-items: start;
  list-style-type: none;
}
ul li {
  padding: 6px 0;
}
ul li a {
  position: relative;
  display: block;
  padding: 4px 0;
  font-family: Lato, sans-serif;
  color: #ecf0f1;
  text-decoration: none;
  text-transform: uppercase;
  transition: 0.5s;
}
ul li a::after {
  position: absolute;
  content: "";
  top: 100%;
  left: 0;
  width: 100%;
  height: 3px;
  background: #3498db;
  transform: scaleX(0);
  transform-origin: right;
  transition: transform 0.5s;
}
ul li a:hover {
  color: #95a5a6;
}
ul li a:hover::after {
  transform: scaleX(1);
  transform-origin: left;
}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
</head>
<body>
<ul>

<?php
ini_set( "display_errors", 0);
session_start();
if($_SESSION['logged']==true){
    $currentUser = $_SESSION["username"];
    $role = $_SESSION['idRole'];
    
    
}
?>


  <li><a href="../index.php">home</a></li>
  <li><a href="./UpdatePass.php">Update Password</a></li>
  <li><a href="./UpdateUser.php">Update User</a></li>
  <li><a href="./UpdateMail.php">Update Mail</a></li>
  <?php
  /* if($_SESSION['logged'] && $role=="adm"){
    echo '
      <li><a href="./AddRoom.php">Add Room</a></li>
      <li><a href="./AddComp.php">Add Component</a></li>
    ';

  } */
  ?>
</ul>
</body>
</html>