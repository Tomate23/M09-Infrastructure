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
      $_SESSION['idRole']=$row['idRole'];
      $_SESSION['username']=$row['nameUser'];
      $_SESSION['usermail']=$row['mailUser'];

      header("Location: ../index.php");
      //header("Location: ../Redirec/HardwareForm2.php");
   }
 }
 else {
    $_SESSION["error"] = $error;
    header("Location: ../Redirec/Login.php");
 }
