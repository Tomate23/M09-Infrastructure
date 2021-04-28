<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/ImageUpdate.css">
    <title>Supplier Photo</title>
</head>
<body>

<div class="grid">
  <div class="grid__item">
  <?php
  if(isset($_SESSION['check'])){
      $image = $_SESSION['check'];
      echo '<div class="card"><img class="card__img" src="'.$image.'" alt="Snowy Mountains">';
  }
  ?>
    <!-- <div class="card"><img class="card__img" src="https://i.postimg.cc/pTXZcMD0/aliexpress.png" alt="Snowy Mountains"> -->
      <div class="card__content">
        <h1 class="card__header">Upload Supplier Image</h1>
        <?php
        if(isset($_SESSION['error'])){
            $errorMSG = $_SESSION['error'];
            echo $errorMSG;
            unset($_SESSION['error']);
        }
  ?>
        <!-- <p class="card__text">Look up at the night sky, and find yourself <strong>immersed</strong> in the amazing mountain range of Aspen.</p> -->

        <form action="../Includes-PHP/Addphoto.php" method="post">
        <label for="fname">Insert Image URL</label><br>
        <input type="text" id="fname" name="imageURL" value=""><br>
        <br>
        <button type="submit" value="Submit" class="card__btn">Check URL <span>&rarr;</span></button>
        </form> 
        
      </div>
    </div>
  </div>


  <!-- <div class="grid__item">
    <div class="card"><img class="card__img" src="https://images.unsplash.com/photo-1485160497022-3e09382fb310?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2250&amp;q=80" alt="Desert">
      <div class="card__content">
        <h1 class="card__header">Misty mornings</h1>
        <p class="card__text">Capture the stunning <strong>essence</strong> of the early morning sunrise in the Californian wilderness.</p>
        <button class="card__btn">Explore <span>&rarr;</span></button>
      </div>
    </div>
  </div>
  <div class="grid__item">
    <div class="card"><img class="card__img" src="https://images.unsplash.com/photo-1506318164473-2dfd3ede3623?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=3300&amp;q=80" alt="Canyons">
      <div class="card__content">
        <h1 class="card__header">Utah sunsets</h1>
        <p class="card__text">Sunsets over the <strong>stunning</strong> Utah Canyonlands, is truly something much more than incredible.</p>
        <button class="card__btn">Explore <span>&rarr;</span></button>
      </div>
    </div>
  </div> -->


</div>



<script>
    
</script>
</body>
</html>