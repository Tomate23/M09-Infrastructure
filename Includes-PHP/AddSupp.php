<?php
session_start();
include_once './connection.php';

/* Getting the Suppliers variables from the form */
$name = $_POST['nameSupp'];
$product = $_POST['product'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$mail = $_POST['mail'];

// Required field names
$required = array('nameSupp', 'product', 'phone', 'address', 'mail');

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
  header("Location: ../Redirec/AddSupplier.php");
} else {
  $sql = "INSERT INTO Supplier (nameSupp,phoneSupp,productSupp,mailSupp,addressSupp) VALUES ('$name','$phone','$product','$mail','$address');";
  mysqli_query($conndb, $sql);
  header("Location: ../Redirec/SupplierPage.php");
}