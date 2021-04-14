<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="icon" type="image/x-icon" href="./img/chili-pepper.png" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incidencias</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">

    <link rel="stylesheet" href="css/styleCaousel.css">
    <link rel="stylesheet" href="css/styleDropDown.css">
    <link rel="stylesheet" href="/css/Header.css">
    <link rel="stylesheet" href="css/box.css">
    <link rel="stylesheet" href="css/Pedralbes.css">
    <link rel="stylesheet" href="css/LinkPedr.css">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
        <div class="container">
            <?php
                ini_set( "display_errors", 0);
                session_start();
                if($_SESSION['logged']==true){
                    $currentUser = $_SESSION["username"];
                    $role = $_SESSION['idRole'];
                    echo '<a class="navbar-brand" href="Includes-PHP/exit.php">'.$currentUser.'</a>';
                    
                }
                elseif($_SESSION['logged']==false){
                    echo '<a class="navbar-brand" href="#">Incidencias</a>';
                    
                }
            ?>
            <!-- <a class="navbar-brand" href="#">Incidencias</a> -->
            <img src="./img/chili-pepper.png" alt="Picantes">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <?php
                    if($_SESSION['logged'] && $role=="adm"){
                        echo '
                        <li class="nav-item">
                            <a class="nav-link" href="Alerts/sudoku.php">Game</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Includes-PHP/exit.php">Logout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Redirec/Usersevents.php">My Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Redirec/Settings.php">Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Redirec/AdminPage.php">Admin</a>
                        </li>
                        ';
                    }
                    elseif($_SESSION['logged'] && $role!="adm"){
                        echo '
                        <li class="nav-item">
                            <a class="nav-link" href="Alerts/sudoku.php">Game</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Includes-PHP/exit.php">Logout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Redirec/Usersevents.php">My Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Redirec/Settings.php">Settings</a>
                        </li>
                        ';
                    }
                    else{
                        echo '
                        <li class="nav-item">
                            <a class="nav-link" href="Redirec/Login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Redirec/Signup.php">SignUp</a>
                        </li>
                        ';
                    }
                    ?>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="Redirec/Login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Redirec/Signup.php">SignUp</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- Full Page Image Header with Vertically Centered Content -->
    <!-- <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <h1 class="font-weight-light">Vertically Centered Masthead Content</h1>
                    <p class="lead">A great starter layout for a landing page</p>
                </div>
            </div>
        </div>
    </header> -->

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="heading-section mb-5 pb-md-4">Recent Events</h2>
                </div>
                <div class="col-md-12">
                    <div class="featured-carousel owl-carousel">

			<?php

			include_once './Includes-PHP/connection.php';
			// Printing the event's information from the database
			$sql = "select * from events";
			$result = mysqli_query($conndb,$sql);
            $resultCheck = mysqli_num_rows($result);
            
            /* $images = array("'img/cableado.jpg'","'img/teclado.jpg'","'/img/hardware.jpg'","'img/image_6.jpg'");
            foreach ($images as $ranimage){
                
            } */
            $images = array("'img/cableado.jpg'","'img/teclado.jpg'","'/img/hardware.jpg'","'img/image_6.jpg'");

            

            $ranimage = $images[array_rand($images)];

			if ($resultCheck > 0){
				while ($row = mysqli_fetch_array($result)){

                    //$image = "background-image: url('/img/hardware.jpg');";


                    $label = $row['label'];
                    $importance = $row['importanceEvent'];
                    $user = $row['userEvento'];
                    $descripE = $row['descripEvent'];

                    $fulldate = $row['eventDate'];
                    $splitDate = explode("-", $fulldate);

                    $year = $splitDate[0];
                    $month = $splitDate[1];
                    $day = $splitDate[2];
                    

                    foreach(range(0, $arrayLenght) as $index){}
                    echo '
                        <div class="item">
                            <div class="blog-entry">
                                <a href="#" class="block-20 d-flex align-items-start" style="background-image: url('.$ranimage.');">
                                    <div class="meta-date text-center p-2">
                                        <span class="day">'.$day.'</span>
                                        <span class="mos">'.$month.'</span>
                                        <span class="yr">'.$year.'</span>
                                    </div>
                                </a>
                                <div class="text border border-top-0 p-4">
                                    <h3 class="heading"><a href="#">'.$label.'</a></h3>
                                    <p>' .$descripE. '</p>
                                    <div class="d-flex align-items-center mt-4">
                                        <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span
                                                    class="ion-ios-arrow-round-forward"></span></a></p>
                                        <p class="ml-auto meta2 mb-0">
                                            <a href="#" class="mr-2">'.$user.'</a>
                                            <a href="#" class="meta-chat"><span class="ion-ios-chatboxes"></span> 3</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>';
				}
			}
			?>

                        <!-- <div class="item">
                            <div class="blog-entry">
                                <a href="#" class="block-20 d-flex align-items-start" style="background-image: url('img/cableado.jpg');">
                                    <div class="meta-date text-center p-2">
                                        <span class="day">26</span>
                                        <span class="mos">Nov.</span>
                                        <span class="yr">2019</span>
                                    </div>
                                </a>
                                <div class="text border border-top-0 p-4">
                                    <h3 class="heading"><a href="#">Finance And Legal Working Streams Occur
                                            Throughout</a></h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center mt-4">
                                        <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span
                                                    class="ion-ios-arrow-round-forward"></span></a></p>
                                        <p class="ml-auto meta2 mb-0">
                                            <a href="#" class="mr-2">Admin</a>
                                            <a href="#" class="meta-chat"><span class="ion-ios-chatboxes"></span> 3</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- <div class="item">
                            <div class="blog-entry">
                                <a href="#" class="block-20 d-flex align-items-start" style="background-image: url('img/teclado.jpg');">
                                    <div class="meta-date text-center p-2">
                                        <span class="day">26</span>
                                        <span class="mos">Nov.</span>
                                        <span class="yr">2019</span>
                                    </div>
                                </a>
                                <div class="text border border-top-0 p-4">
                                    <h3 class="heading"><a href="#">Finance And Legal Working Streams Occur
                                            Throughout</a></h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center mt-4">
                                        <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span
                                                    class="ion-ios-arrow-round-forward"></span></a></p>
                                        <p class="ml-auto meta2 mb-0">
                                            <a href="#" class="mr-2">Admin</a>
                                            <a href="#" class="meta-chat"><span class="ion-ios-chatboxes"></span> 3</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="blog-entry">
                                <a href="#" class="block-20 d-flex align-items-start" style="background-image: url('img/hardware.jpg');">
                                    <div class="meta-date text-center p-2">
                                        <span class="day">26</span>
                                        <span class="mos">Nov.</span>
                                        <span class="yr">2019</span>
                                    </div>
                                </a>
                                <div class="text border border-top-0 p-4">
                                    <h3 class="heading"><a href="#">Finance And Legal Working Streams Occur
                                            Throughout</a></h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center mt-4">
                                        <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span
                                                    class="ion-ios-arrow-round-forward"></span></a></p>
                                        <p class="ml-auto meta2 mb-0">
                                            <a href="#" class="mr-2">Admin</a>
                                            <a href="#" class="meta-chat"><span class="ion-ios-chatboxes"></span> 3</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="blog-entry">
                                <a href="#" class="block-20 d-flex align-items-start" style="background-image: url('img/CPU.jpg');">
                                    <div class="meta-date text-center p-2">
                                        <span class="day">26</span>
                                        <span class="mos">Nov.</span>
                                        <span class="yr">2019</span>
                                    </div>
                                </a>
                                <div class="text border border-top-0 p-4">
                                    <h3 class="heading"><a href="#">Finance And Legal Working Streams Occur
                                            Throughout</a></h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center mt-4">
                                        <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span
                                                    class="ion-ios-arrow-round-forward"></span></a></p>
                                        <p class="ml-auto meta2 mb-0">
                                            <a href="#" class="mr-2">Admin</a>
                                            <a href="#" class="meta-chat"><span class="ion-ios-chatboxes"></span> 3</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="blog-entry">
                                <a href="#" class="block-20 d-flex align-items-start" style="background-image: url('img/mouse.jpg');">
                                    <div class="meta-date text-center p-2">
                                        <span class="day">26</span>
                                        <span class="mos">Nov.</span>
                                        <span class="yr">2019</span>
                                    </div>
                                </a>
                                <div class="text border border-top-0 p-4">
                                    <h3 class="heading"><a href="#">Finance And Legal Working Streams Occur
                                            Throughout</a></h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center mt-4">
                                        <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span
                                                    class="ion-ios-arrow-round-forward"></span></a></p>
                                        <p class="ml-auto meta2 mb-0">
                                            <a href="#" class="mr-2">Admin</a>
                                            <a href="#" class="meta-chat"><span class="ion-ios-chatboxes"></span> 3</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="blog-entry">
                                <a href="#" class="block-20 d-flex align-items-start" style="background-image: url('img/image_6.jpg');">
                                    <div class="meta-date text-center p-2">
                                        <span class="day">26</span>
                                        <span class="mos">Nov.</span>
                                        <span class="yr">2019</span>
                                    </div>
                                </a>
                                <div class="text border border-top-0 p-4">
                                    <h3 class="heading"><a href="#">Finance And Legal Working Streams Occur
                                            Throughout</a></h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center mt-4">
                                        <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span
                                                    class="ion-ios-arrow-round-forward"></span></a></p>
                                        <p class="ml-auto meta2 mb-0">
                                            <a href="#" class="mr-2">Admin</a>
                                            <a href="#" class="meta-chat"><span class="ion-ios-chatboxes"></span> 3</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="linkPedralbes">
        <div class="skill-card">
            <header class="skill-card__header">
                <a href="http://www.institutpedralbes.cat" target="_blank">
                    <img class="skill-card__icon" src="img/logoPedralbes.jpg" alt="PedralbesLogo" />
                </a>
            </header>
            <section class="skill-card__body">
                <h2 class="skill-card__title">INS.Pedralbes</h2><span class="skill-card__duration">ASIX CiberSeguretat</span>
                <ul class="skill-card__knowledge">
                    <li>ESO</li>
                    <li>Baxillerat</li>
                    <li>FP</li>
                </ul>
            </section>
        </div>
    </section>

    <section class="bodyPedralbes">
        <div class="containerPedr">
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <div class="icon">
                            <!-- <i class="fa fa-linkedin-square" aria-hidden="true"></i> -->
                            <i class="fa fa-terminal" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <h3>
                            <a href="https://es.wikipedia.org/wiki/Software" target="_blank">_Software</a>
                        </h3>
                        <p>In this page you can report software events.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <div class="icon">
                            <i class="fa fa-microchip" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <h3>
                            <a href="https://es.wikipedia.org/wiki/Hardware" target="_blank">_Hardware</a>
                        </h3>
                        <p>In all cases make suer you have the ID of the device.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <div class="icon">
                            <i class="fa fa-github-square" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <h3>
                            <a href="https://github.com/Tomate23/M09-Infrastructure.git" target="_blank">M09-Group4</a>
                        </h3>
                        <p>Here you can se our project's source code</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center mb-5">
                    <h2 class="heading-section">Selecciona una Categoria</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 d-flex justify-content-center align-items-center">
                    <select multiple data-placeholder="Sección">
                        <option>Perifericos</option>
                        <option selected>Framer X</option>
                        <option>Laptops</option>
                        <option>Torres</option>
                        <option>Wifi</option>
                        <option>Sonido</option>
                    </select>
                </div>
            </div>
        </div>
    </section> -->

    <section class="body">
        <div class="grid">
            <div class="grid__item">
                <div class="card"><img class="card__img" src="./img/Categories/keyboard.jpg" alt="Snowy Mountains">
                    <div class="card__content">
                        <h1 class="card__header">Hardware</h1>
                        <p class="card__text">2B || !2B <strong>That the Question</strong></p>
                        <a class="card__btn" href="./Redirec/HardwareForm2.php">Explore<span>&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="grid__item">
                <div class="card"><img class="card__img" src="./img/Categories/software.jpeg" alt="Desert">
                    <div class="card__content">
                        <h1 class="card__header">Software</h1>
                        <p class="card__text">while ( ! ( succeed = <strong>try ()</strong> ) );</p><button class="card__btn">Explore <span>&rarr;</span></button>
                    </div>
                </div>
            </div>
            <div class="grid__item">
                <div class="card"><img class="card__img" src="./img/Categories/equipment.jpg" alt="Canyons">
                    <div class="card__content">
                        <h1 class="card__header">Equipamiento</h1>
                        <p class="card__text">There is no place like <strong>127.0.0.1</strong></p><button class="card__btn">Explore <span>&rarr;</span></button>
                    </div>
                </div>
            </div>
            
            <!-- <div class="grid__item">
                <div class="card"><img class="card__img" src="./img/Categories/projector.jpg" alt="Canyons">
                    <div class="card__content">
                        <h1 class="card__header">Proyectores</h1>
                        <p class="card__text">Sunsets over the <strong>stunning</strong> Utah Canyonlands, is truly something much more than incredible.</p><button class="card__btn">Explore <span>&rarr;</span></button>
                    </div>
                </div>
            </div>
            <div class="grid__item">
                <div class="card"><img class="card__img" src="./img/Categories/route.jpeg" alt="Canyons">
                    <div class="card__content">
                        <h1 class="card__header">Router</h1>
                        <p class="card__text">Sunsets over the <strong>stunning</strong> Utah Canyonlands, is truly something much more than incredible.</p><button class="card__btn">Explore <span>&rarr;</span></button>
                    </div>
                </div>
            </div>
            <div class="grid__item">
                <div class="card"><img class="card__img" src="./img/Categories/speaker.jpg" alt="Canyons">
                    <div class="card__content">
                        <h1 class="card__header">Altavoces</h1>
                        <p class="card__text">Sunsets over the <strong>stunning</strong> Utah Canyonlands, is truly something much more than incredible.</p><button class="card__btn">Explore <span>&rarr;</span></button>
                    </div>
                </div>
            </div> -->
        </div>
    </section>



    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <script src="js/jqueryDROP.min.js"></script>
    <script src="js/popperDROP.js"></script>
    <script src="js/bootstrapDROP.min.js"></script>
    <script src="js/mainDROP.js"></script>

</body>
</html>
