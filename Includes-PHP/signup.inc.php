<?php

    include_once './connection.php';

    $name = $_POST['name'];
    $mail = $_POST['email'];
    $pass = $_POST['password'];

    $sql = "INSERT INTO usere (nameUser,mailUser,passwordUser	) VALUES ('$name','$mail','$pass')";
    mysqli_query($conndb, $sql);
    header("location: ../index.php?=successSignUp");