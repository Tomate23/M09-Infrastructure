<?php
    include_once './connection.php';
    session_start();

    $image = $_POST['imageURL'];

    // Required field names
    $required = array('imageURL');

    // Loop over field names, make sure each one exists and is not empty
    $errorForm = false;
        foreach($required as $field) {
            if (empty($_POST[$field])) {
                $errorForm = true;
            }
        }
    
    if ($errorForm) {
        $error="Please insert the URL of your image.";
        $_SESSION["error"] = $error;
        header("Location: ../Redirec/AddSupplierPhoto.php");
      } else {
        $imageData = base64_encode(file_get_contents($image));
        $_SESSION['check'] = $imageData;
        header("Location: ../Redirec/AddSupplierPhoto.php");
      }
    
    
    // echo '<img src="data:image/jpeg;base64,'.$imageData.'">';
?>