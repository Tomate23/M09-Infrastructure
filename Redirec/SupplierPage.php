<!DOCTYPE html>
<html lang="en">
<head>
<style>
#header {
  background: url(https://images.unsplash.com/photo-1529236183275-4fdcf2bc987e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=747&q=80)
    center center / cover no-repeat;
}

</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link href="../css/fontawesome-free-5.15.3-web/css/all.css" rel="stylesheet">
    <title>Suppliers</title>
</head>
<body>
<nav class="bg-dark navbar-dark">
  <div class="container">
    <a href="../index.php" class="navbar-brand"><i class="fas fa-tree mr-2"></i>Home</a>
    <a href="./Eventsmgmt.php" class="navbar-brand"><i class="fas fa-tree mr-2"></i>Eventsmgmt</a>
  </div>
</nav>
<section id="header" class="jumbotron text-center">
  <h1 class="display-3">Suppliers</h1>
  <p class="lead">Administrator!!! Here you can se your Suppliers</p>
  <a href="./AddSupplier.php" class="btn btn-primary">Add Supplier</a>
  <!-- <a href="./AddSupplierPhoto.php" class="btn btn-primary">Add Photo</a> -->
  <!-- <a href="" class="btn btn-primary">Click</a>
  <a href="" class="btn btn-secondary">Click</a> -->
</section>

<section id="gallery">
  <div class="container">
    <div class="row">

    <?php
    include_once '../Includes-PHP/connection.php';
    $sql = "SELECT * from Supplier;";
    $result = mysqli_query($conndb, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0){
        while($row = mysqli_fetch_array($result)){
            echo '
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="'.$row['imgSupp'].'" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">'.$row['nameSupp'].'</h5>
                            <p class="card-text">
                                <strong>Product: </strong>'.$row['productSupp'].'</br>
                                <strong>Mail: </strong>'.$row['mailSupp'].'</br>
                                <strong>Adress: </strong>'.$row['addressSupp'].'</br>
                                <strong>Phone: </strong>'.$row['phoneSupp'].'</br>
                            </p>
                            <a href="" class="btn btn-outline-success btn-sm">Read More</a>
                            <!-- <a href="" class="btn btn-outline-danger btn-sm"><i class="fas fa-heart"></i></a> -->
                        </div>
                    </div>
                </div>
            ';
        }
    }
    ?>
      <!-- <div class="col-lg-4 mb-4">
        <div class="card">
          <img src="https://images.unsplash.com/photo-1477862096227-3a1bb3b08330?ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=60" alt="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Sunset</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
            <a href="" class="btn btn-outline-success btn-sm">Read More</a>
            <a href="" class="btn btn-outline-danger btn-sm"><i class="fas fa-heart"></i></a>
          </div>
        </div>
      </div> -->

      <!-- <div class="col-lg-4 mb-4">
        <div class="card">
          <img src="https://images.unsplash.com/photo-1516214104703-d870798883c5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60" alt="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Sunset</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
            <a href="" class="btn btn-outline-success btn-sm">Read More</a>
            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card">
          <img src="https://images.unsplash.com/photo-1477862096227-3a1bb3b08330?ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=60" alt="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Sunset</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
            <a href="" class="btn btn-outline-success btn-sm">Read More</a>
            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
          </div>
        </div>
      </div> -->

      
    </div>
  </div>
</section>

</body>
</html>