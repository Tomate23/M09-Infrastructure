<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    *,
    *:before,
    *:after {
      box-sizing: border-box;
    }

    html {
      font-size: 18px;
      line-height: 1.5;
      font-weight: 300;
      color: #333;
      font-family: "Nunito Sans", sans-serif;
    }

    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      background-color: #ecf0f9;
      background-attachment: fixed;
    }

    .content {
      display: flex;
      margin: 0 auto;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      max-width: 1000px;
      /* background-color: blue; */
    }

    .heading {
      width: 100%;
      margin-left: 1rem;
      font-weight: 900;
      font-size: 1.618rem;
      text-transform: uppercase;
      letter-spacing: 0.1ch;
      line-height: 1;
      padding-bottom: 0.5em;
      margin-bottom: 1rem;
      position: relative;
    }

    .heading:after {
      display: block;
      content: "";
      position: absolute;
      width: 60px;
      height: 4px;
      background: linear-gradient(135deg, #1a9be6, #1a57e6);
      bottom: 0;
    }

    .description {
      width: 100%;
      margin-top: 0;
      margin-left: 1rem;
      margin-bottom: 3rem;
    }

    .card {
      color: inherit;
      cursor: pointer;
      width: calc(33% - 2rem);
      min-width: calc(33% - 2rem);
      height: 400px;
      min-height: 400px;
      perspective: 1000px;
      margin: 1rem;
      position: relative;
    }

    @media screen and (max-width: 800px) {
      .card {
        width: calc(50% - 2rem);
      }
    }

    @media screen and (max-width: 500px) {
      .card {
        width: 100%;
      }
    }

    .front,
    .back {
      display: flex;
      border-radius: 6px;
      background-position: center;
      background-size: cover;
      text-align: center;
      justify-content: center;
      align-items: center;
      position: absolute;
      height: 100%;
      width: 100%;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
      transform-style: preserve-3d;
      transition: ease-in-out 600ms;
    }

    .front {
      background-size: cover;
      padding: 2rem;
      font-size: 1.618rem;
      font-weight: 600;
      color: #fff;
      overflow: hidden;
      font-family: Poppins, sans-serif;
    }

    .front:before {
      position: absolute;
      display: block;
      content: "";
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(135deg, #1a9be6, #1a57e6);
      opacity: 0.25;
      z-index: -1;
    }

    .card:hover .front {
      transform: rotateY(180deg);
    }

    .card:nth-child(even):hover .front {
      transform: rotateY(-180deg);
    }

    .back {
      background: #fff;
      transform: rotateY(-180deg);
      padding: 0 2em;
    }

    .back .button {
      background: linear-gradient(135deg, #1a9be6, #1a57e6);
    }

    .back .button:before {
      box-shadow: 0 0 10px 10px rgba(26, 87, 230, 0.25);
      background-color: rgba(26, 87, 230, 0.25);
    }

    .card:hover .back {
      transform: rotateY(0deg);
    }

    .card:nth-child(even) .back {
      transform: rotateY(180deg);
    }

    .card:nth-child(even) .back .button {
      background: linear-gradient(135deg, #e61a80, #e61a3c);
    }

    .card:nth-child(even) .back .button:before {
      box-shadow: 0 0 10px 10px rgba(230, 26, 60, 0.25);
      background-color: rgba(230, 26, 60, 0.25);
    }

    .card:nth-child(even):hover .back {
      transform: rotateY(0deg);
    }

    .button {
      transform: translateZ(40px);
      cursor: pointer;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
      font-weight: bold;
      color: #fff;
      padding: 0.5em 1em;
      border-radius: 100px;
      font: inherit;
      border: none;
      position: relative;
      transform-style: preserve-3d;
      transition: 300ms ease;
    }

    .button:before {
      transition: 300ms ease;
      position: absolute;
      display: block;
      content: "";
      transform: translateZ(-40px);
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
      height: calc(100% - 20px);
      width: calc(100% - 20px);
      border-radius: 100px;
      left: 10px;
      top: 16px;
    }

    .button:hover {
      transform: translateZ(55px);
    }

    .button:hover:before {
      transform: translateZ(-55px);
    }

    .button:active {
      transform: translateZ(20px);
    }

    .button:active:before {
      transform: translateZ(-20px);
      top: 12px;
    }

    .fronttitle {
      color: black;
      display: block;
    }

    /* Select container styles */
    .selectContainer {
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Roboto', sans-serif;
      /* background-color: red; */
      position: relative;
      text-align: center;

    }

    .select {
      position: relative;
      min-width: 200px;
    }

    .select svg {
      position: absolute;
      right: 12px;
      top: calc(50% - 3px);
      width: 10px;
      height: 6px;
      stroke-width: 2px;
      stroke: #9098a9;
      fill: none;
      stroke-linecap: round;
      stroke-linejoin: round;
      pointer-events: none;
    }

    .select select {
      -webkit-appearance: none;
      padding: 7px 40px 7px 12px;
      width: 100%;
      border: 1px solid #e8eaed;
      border-radius: 5px;
      background: #fff;
      box-shadow: 0 1px 3px -2px #9098a9;
      cursor: pointer;
      font-family: inherit;
      font-size: 16px;
      transition: all 150ms ease;
    }

    .select select:required:invalid {
      color: #5a667f;
    }

    .select select option {
      color: #223254;
    }

    .select select option[value=""][disabled] {
      display: none;
    }

    .select select:focus {
      outline: none;
      border-color: #07f;
      box-shadow: 0 0 0 2px rgba(0, 119, 255, 0.2);
    }

    .select select:hover+svg {
      stroke: #07f;
    }

    .sprites {
      position: absolute;
      width: 0;
      height: 0;
      pointer-events: none;
      user-select: none;
    }

    .multi-button {
      margin-left: 4px;
    }

    .multi-button button {
      background: white;
      border: 0.125em solid black;
      cursor: pointer;
      font: 400 0.75rem/1.25 "Montserrat", sans-serif;
      letter-spacing: 0.125em;
      margin: 0.1rem;
      padding: 0.1em 0.75em;
      position: relative;
      text-transform: uppercase;
    }

    .multi-button button:before,
    .multi-button button:after {
      content: "";
      position: absolute;
      transition: all 0.125s ease-in-out;
    }

    .multi-button button.cut {
      background: none;
      border-color: transparent;
    }

    .multi-button button.cut:before,
    .multi-button button.cut:after {
      transition: all 0.175s ease-in-out;
    }

    .multi-button button.cut:before {
      background: black;
      border: 0px dashed black;
      left: -0.125em;
      top: -0.125em;
      right: -0.125em;
      bottom: -0.125em;
      z-index: -1;
    }

    .multi-button button.cut:hover:before,
    .multi-button button.cut:focus:before {
      background: white;
      border-width: 0.125em;
    }

    .multi-button button.cut:after {
      background: white;
      bottom: 0;
      left: 0;
      right: 0;
      top: 0;
      z-index: -1;
    }

    .alert>.start-icon {
      margin-right: 0;
      min-width: 20px;
      text-align: center;
    }

    .alert>.start-icon {
      margin-right: 5px;
    }

    .greencross {
      font-size: 18px;
      color: #25ff0b;
      text-shadow: none;
    }

    .alert-simple.alert-success {
      border: 1px solid rgba(36, 241, 6, 0.46);
      background-color: rgba(7, 149, 66, 0.12156862745098039);
      box-shadow: 0px 0px 2px #259c08;
      color: #0ad406;
      text-shadow: 2px 1px #00040a;
      transition: 0.5s;
      cursor: pointer;
    }

    .alert-success:hover {
      background-color: rgba(7, 149, 66, 0.35);
      transition: 0.5s;
    }

    .alert-simple.alert-info {
      border: 1px solid rgba(6, 44, 241, 0.46);
      background-color: rgba(7, 73, 149, 0.12156862745098039);
      box-shadow: 0px 0px 2px #0396ff;
      color: #0396ff;
      text-shadow: 2px 1px #00040a;
      transition: 0.5s;
      cursor: pointer;
    }

    .alert-info:hover {
      background-color: rgba(7, 73, 149, 0.35);
      transition: 0.5s;
    }

    .blue-cross {
      font-size: 18px;
      color: #0bd2ff;
      text-shadow: none;
    }

    .alert-simple.alert-warning {
      border: 1px solid rgba(241, 142, 6, 0.81);
      background-color: rgba(220, 128, 1, 0.16);
      box-shadow: 0px 0px 2px #ffb103;
      color: #ffb103;
      text-shadow: 2px 1px #00040a;
      transition: 0.5s;
      cursor: pointer;
    }

    .alert-warning:hover {
      background-color: rgba(220, 128, 1, 0.33);
      transition: 0.5s;
    }

    .warning {
      font-size: 18px;
      color: #ffb40b;
      text-shadow: none;
    }

    .alert-simple.alert-danger {
      border: 1px solid rgba(241, 6, 6, 0.81);
      background-color: rgba(220, 17, 1, 0.16);
      box-shadow: 0px 0px 2px #ff0303;
      color: #ff0303;
      text-shadow: 2px 1px #00040a;
      transition: 0.5s;
      cursor: pointer;
    }

    .alert-danger:hover {
      background-color: rgba(220, 17, 1, 0.33);
      transition: 0.5s;
    }

    .danger {
      font-size: 18px;
      color: #ff0303;
      text-shadow: none;
    }

    .alert-simple.alert-primary {
      border: 1px solid rgba(6, 241, 226, 0.81);
      background-color: rgba(1, 204, 220, 0.16);
      box-shadow: 0px 0px 2px #03fff5;
      color: #03d0ff;
      text-shadow: 2px 1px #00040a;
      transition: 0.5s;
      cursor: pointer;
    }

    .alert-primary:hover {
      background-color: rgba(1, 204, 220, 0.33);
      transition: 0.5s;
    }

    .alertprimary {
      font-size: 18px;
      color: #03d0ff;
      text-shadow: none;
    }

    .square_box {
      position: absolute;
      -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      transform: rotate(45deg);
      border-top-left-radius: 45px;
      opacity: 0.302;
    }

    .square_box.box_three {
      background-image: -moz-linear-gradient(-90deg, #290a59 0%, #3d57f4 100%);
      background-image: -webkit-linear-gradient(-90deg, #290a59 0%, #3d57f4 100%);
      background-image: -ms-linear-gradient(-90deg, #290a59 0%, #3d57f4 100%);
      opacity: 0.059;
      left: -80px;
      top: -60px;
      width: 500px;
      height: 500px;
      border-radius: 45px;
    }

    .square_box.box_four {
      background-image: -moz-linear-gradient(-90deg, #290a59 0%, #3d57f4 100%);
      background-image: -webkit-linear-gradient(-90deg, #290a59 0%, #3d57f4 100%);
      background-image: -ms-linear-gradient(-90deg, #290a59 0%, #3d57f4 100%);
      opacity: 0.059;
      left: 150px;
      top: -25px;
      width: 550px;
      height: 550px;
      border-radius: 45px;
    }

    .alert:before {
      content: "";
      position: absolute;
      width: 0;
      height: calc(100% - 44px);
      border-left: 1px solid;
      border-right: 2px solid;
      border-bottom-right-radius: 3px;
      border-top-right-radius: 3px;
      left: 0;
      top: 50%;
      transform: translate(0, -50%);
      height: 20px;
    }

    .fa-times {
      -webkit-animation: blink-1 2s infinite both;
      animation: blink-1 2s infinite both;
    }

    /**
 * ----------------------------------------
 * animation blink-1
 * ----------------------------------------
 */
    @-webkit-keyframes blink-1 {

      0%,
      50%,
      100% {
        opacity: 1;
      }

      25%,
      75% {
        opacity: 0;
      }
    }

    @keyframes blink-1 {

      0%,
      50%,
      100% {
        opacity: 1;
      }

      25%,
      75% {
        opacity: 0;
      }
    }
  </style>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Events MGMT</title>
</head>

<body>

  <form action="" method="post">
    <div class="selectContainer">
      <label class="select" for="slct">
        <select id="slct" required="required" name="filter">
          <option value="all" disabled="disabled" selected="selected">Select option</option>

          <?php
          include_once '../Includes-PHP/connection.php';
          $sql = "select * from room;";
          $result = mysqli_query($conndb,$sql);
          $resultCheck = mysqli_num_rows($result);
          if($resultCheck > 0){
              while($row = mysqli_fetch_array($result)){
                  echo '
                      <option value="'.$row['idRoom'].'">'.$row['idRoom'].'</option>
                  ';
              }
          }
          ?>

          <!-- <option value="ASIX-06">ASIX-06</option>
          <option value="ASIX-07">ASIX-07</option>
          <option value="BTX-01">BTX-01</option>
          <option value="BTX-02">BTX-02</option>
          <option value="ESO-01">ESO-01</option>
          <option value="ESO-02">ESO-02</option> -->
          <option value="deleted">Deleted</option>
        </select>
        <svg>
          <use xlink:href="#select-arrow-down"></use>
        </svg>
      </label>
      <!-- SVG Sprites-->
      <svg class="sprites">
        <symbol id="select-arrow-down" viewbox="0 0 10 6">
          <polyline points="1 1 5 5 9 1"></polyline>
        </symbol>
      </svg>
      <div class="multi-button">
        <button class="cut">Filter</button>
      </div>
    </div>
  </form>

  <div class="content">
  <?php
    $filterValue = $_POST['filter'];
    echo '
    <h1 class="heading">'.$filterValue.': Administration</h1>
    ';
  ?>
    <!-- <h1 class="heading">Events Administration</h1> -->
    <p class="description">
      Where administrators can manage the events.
      <a href="../index.php"><mark>Home</mark></a> - 
      <a href="./SupplierPage.php">SupplierPage</a>
    </p>

    <?php
    include_once '../Includes-PHP/connection.php';
    session_start();
    if ($_SESSION['logged']) {
      $currentUser = $_SESSION["username"];
    }
    $filterValue = $_POST['filter'];

    /* if ($filterValue == "deleted"){
      $sql = "SELECT * from DeletedEvents;";
      $result = mysqli_query($conndb, $sql);
      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0){
        while ($row = mysqli_fetch_array($result)){
          echo '
          </a><a class="card" href="#">
          <div class="front" style="background-image: url(https://picsum.photos/id/870/200/300?grayscale&blur=1)">
            <p class="fronttitle">' .$row['label'] .'</p>
          </div>
          <div class="back">
            <div>
              <p>User: '.$row['userEvento'].'</p>
              <p>Description: '.$row['descripEvent'].'</p>
              <p>Date: '.$row['eventDate'].'</p>
              <p>Importance: '.$row['importanceEvent'].'</p>
              <button class="button">Delete</button>
            </div>
          </div>
          ';
        }
      }
    } */

    $sql = "SELECT * from events WHERE idRoom = '$filterValue';";
    $result = mysqli_query($conndb, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
      while ($row = mysqli_fetch_array($result)) {
        $id = $row['idEvent'];
        echo '
          </a><a class="card" href="../Includes-PHP/Delete.php?id='.$id.'">
            <div class="front" style="background-image: url(https://picsum.photos/id/870/200/300?grayscale&blur=1)">
              <p class="fronttitle">' .$row['label'] .'</p>
            </div>
            <div class="back">
              <div>
                <p>User: '.$row['userEvento'].'</p>
                <p>Description: '.$row['descripEvent'].'</p>
                <p>Date: '.$row['eventDate'].'</p>
                <p>Importance: '.$row['importanceEvent'].'</p>
                <p>Room: '.$row['idRoom'].'</p>
                <button class="button">Delete</button>
              </div>
            </div>
          ';
      }
    } elseif ($filterValue == "deleted"){
      $sql = "SELECT * from DeletedEvents;";
      $result = mysqli_query($conndb, $sql);
      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0){
        while ($row = mysqli_fetch_array($result)){
          $id = $row['idEvent'];
          echo '
          </a><a class="card" href="../Includes-PHP/Delete2.php?id='.$id.'">
          <div class="front" style="background-image: url(https://picsum.photos/id/870/200/300?grayscale&blur=1)">
            <p class="fronttitle">' .$row['label'] .'</p>
          </div>
          <div class="back">
            <div>
              <p>User: '.$row['userEvento'].'</p>
              <p>Description: '.$row['descripEvent'].'</p>
              <p>Date: '.$row['eventDate'].'</p>
              <p>Importance: '.$row['importanceEvent'].'</p>
              <p>Room: '.$row['idRoom'].'</p>
              <button class="button">Delete</button>
            </div>
          </div>
          ';
        }
      }

    } else {
      echo '
      <div class="errorContainer">
        <div class="col-sm-12">
          <div class="alert fade alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show" role="alert" data-brk-library="component__alert">
            <button type="button" class="close font__size-18" data-dismiss="alert">
              <span aria-hidden="true">
                <i class="fa fa-times danger "></i>
              </span>
              <span class="sr-only">Close</span>
            </button>
            <i class="start-icon far fa-times-circle faa-pulse animated"></i>
            <strong class="font__weight-semibold">Oh snap!</strong> Try to use a filter to view some results!!!.
          </div>
        </div>
      </div>
      ';
    }
    ?>
    <!-- <a class="card" href="#!">
      <div class="front" style="background-image: url(//source.unsplash.com/300x401)">
        <p>Lorem ipsum dolor sit amet consectetur adipisi.</p>
      </div>
      <div class="back">
        <div>
          <p>Consectetur adipisicing elit. Possimus, praesentium?</p>
          <p>Provident consectetur natus voluptatem quis tenetur sed beatae eius sint.</p>
          <button class="button">Click Here</button>
        </div>
      </div>

    </a><a class="card" href="#!">
      <div class="front" style="background-image: url(//source.unsplash.com/300x402)">
        <p>Lorem ipsum dolor sit amet consectetur adipisi.</p>
      </div>
      <div class="back">
        <div>
          <p>Consectetur adipisicing elit. Possimus, praesentium?</p>
          <p>Provident consectetur natus voluptatem quis tenetur sed beatae eius sint.</p>
          <button class="button">Click Here</button>
        </div>
      </div>

    </a><a class="card" href="#!">
      <div class="front" style="background-image: url(//source.unsplash.com/300x403)">
        <p>Lorem ipsum dolor sit amet consectetur adipisi.</p>
      </div>
      <div class="back">
        <div>
          <p>Consectetur adipisicing elit. Possimus, praesentium?</p>
          <p>Provident consectetur natus voluptatem quis tenetur sed beatae eius sint.</p>
          <button class="button">Click Here</button>
        </div>
      </div>
    </a><a class="card" href="#!">
      <div class="front" style="background-image: url(//source.unsplash.com/300x404)">
        <p>Lorem ipsum dolor sit amet consectetur adipisi.</p>
      </div>
      <div class="back">
        <div>
          <p>Consectetur adipisicing elit. Possimus, praesentium?</p>
          <p>Provident consectetur natus voluptatem quis tenetur sed beatae eius sint.</p>
          <button class="button">Click Here</button>
        </div>
      </div>
    </a><a class="card" href="#!">
      <div class="front" style="background-image: url(//source.unsplash.com/300x405)">
        <p>Lorem ipsum dolor sit amet consectetur adipisi.</p>
      </div>
      <div class="back">
        <div>
          <p>Consectetur adipisicing elit. Possimus, praesentium?</p>
          <p>Provident consectetur natus voluptatem quis tenetur sed beatae eius sint.</p>
          <button class="button">Click Here</button>
        </div>
      </div>
    </a><a class="card" href="#!">
      <div class="front" style="background-image: url(//source.unsplash.com/300x406)">
        <p>Lorem ipsum dolor sit amet consectetur adipisi.</p>
      </div>
      <div class="back">
        <div>
          <p>Consectetur adipisicing elit. Possimus, praesentium?</p>
          <p>Provident consectetur natus voluptatem quis tenetur sed beatae eius sint.</p>
          <button class="button">Click Here</button>
        </div>
      </div>
    </a> -->

  </div>
</body>

</html>