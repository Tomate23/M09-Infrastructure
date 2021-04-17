<?php
session_start();
include_once './connection.php';

/* Getting the Suppliers variables from the form */
$nameCOMP = $_POST['nameComp'];
$descripCOMP = $_POST['descripComp'];
$catCOMP = $_POST['categ'];


// Required field names
$required = array('nameComp', 'descripComp', 'categ');

// Loop over field names, make sure each one exists and is not empty
$errorForm = false;
foreach($required as $field) {
  if (empty($_POST[$field])) {
    $errorForm = true;
  }
}

if ($errorForm) {
  $error="ERROR: All fields are required.";
  $_SESSION["error"] = $error;
  header("Location: ../Redirec/AddComp.php");
} else {
  $sql = "INSERT INTO component (nameComponent,descripComponent,idCategory) VALUES ('$nameCOMP','$descripCOMP','$catCOMP');";
  mysqli_query($conndb, $sql);
  header("Location: ../index.php");
}