<?php
session_start();
include_once './connection.php';
 $name = $_POST['username'];
 $password = $_POST['password'];

 $error = "INVALID INFORMATION";

 $sql = "SELECT * FROM userE WHERE nameUser='$name' AND passwordUser=MD5('$password');";
 $result = mysqli_query($conndb,$sql);
 $resultCheck = mysqli_num_rows($result);

 if ($resultCheck > 0) {
   while ($row = mysqli_fetch_array($result)){
      $_SESSION['logged']=true;
      $_SESSION["usermail"]=$row['mailUser'];
      $_SESSION ['username']=$name;

      header("Location: ../index.php?=SuccessSignin");
   }
 }
 else {
    $_SESSION["error"] = $error;
    header("Location: ../Redirec/Login.php");
 }

 /* $_SESSION['logged']=true;
    $_SESSION ['username']=$name;
    echo "Usuario validado correctamente";
    header("Location: ../index.php?=SuccessSignin"); */
