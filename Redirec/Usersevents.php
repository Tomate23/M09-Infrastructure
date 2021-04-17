<!DOCTYPE html>
<html lang="en">
<head>

<style>
.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 0px 0px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
 /*  background-color: #bbb; */
 background-color: transparent;
  color: black;
}

.flip-card-back {
  /* background-color: #2980b9; */
  color: black;
  transform: rotateY(180deg);
}
.title{
    /* background-color:red; */

    /* display:flex; */
    margin-bottom:5px;
    justify-content: center;
    align-items: center;
    position: relative;
    text-align: center;

}
.containerEvents{
    /* background-color:yellow; */
    display:grid;
    grid-template-columns: repeat(4, 2fr);
    padding: 5px;
    grid-gap: 25px;

    justify-content: space-evenly;
    justify-items: center;
    align-content: space-evenly;
    align-items: center;
}
.home{
    /* background-color: green; */
}
a {
  display: block;
  width: 250px;
  font-family: sans-serif;
  text-decoration: none;
  font-weight: bold;
  color: black;
  line-height: 1.5rem;
  position: relative;
  top: 50%;
  left: 50%;
  transform: translate3d(-50%, -50%, 0);
}
a span {
  background-image: linear-gradient(to bottom, white 70%, transparent 70%), linear-gradient(to right, #7B7EAD 33%, #84A8C1 33%, #84A8C1 66%, #9BCCB9 66%);
  background-size: 306% 100%;
  background-position: 100% 0;
  transition: 1s background-position;
}
a:hover span {
  background-position: 0%;
}
body {
	background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
.maintitle{
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 10vh;
    background-color: transparent;
}
.texttitle {
  position: relative;
  font-family: sans-serif;
  text-transform: uppercase;
  font-size: 2em;
  letter-spacing: 4px;
  overflow: hidden;
  background: linear-gradient(90deg, #000, #fff, #000);
  background-repeat: no-repeat;
  background-size: 80%;
  animation: animate 4s linear infinite;
  -webkit-background-clip: text;
  -webkit-text-fill-color: rgba(255, 255, 255, 0);
}
.texttitle2 {
  position: relative;
  font-family: sans-serif;
  text-transform: uppercase;
  font-size: 1em;
  letter-spacing: 4px;
  overflow: hidden;
  background: linear-gradient(90deg, #000, #fff, #000);
  background-repeat: no-repeat;
  background-size: 80%;
  animation: animate 4s linear infinite;
  -webkit-background-clip: text;
  -webkit-text-fill-color: rgba(255, 255, 255, 0);
}

@keyframes animate {
  0% {
    background-position: -500%;
  }
  100% {
    background-position: 500%;
  }
}
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
  
}

.closebtn:hover {
  color: black;
}

</style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your Events</title>
</head>
<body>
    <?php
    session_start();
    if($_SESSION['logged']){
        $currentUser = $_SESSION["username"];
        echo '
        <div class="title">
            <div class="maintitle">
                <p class="texttitle">'.$currentUser.' - Events</p>
            </div>
            <div class="home">
                <a href="../index.php">
                    <span>Go Home</span>
                </a>
            </div>
        </div>
        ';
    }
    ?>
    <!-- <div class="title">
        <div class="maintitle">
            <p class="texttitle">Your Events</p>
        </div>
        <div class="home">
            <a href="../index.php">
                <span>Go Home</span>
            </a>
        </div>
    </div> -->
    
    <div class="containerEvents">

    <?php
        include_once '../Includes-PHP/connection.php';
        session_start();
        if($_SESSION['logged']){
            $currentUser = $_SESSION["username"];
        }

        $getID = "SELECT idUser FROM userE WHERE nameUser='$currentUser';";
        $resultID = mysqli_query($conndb, $getID);
        $resultCheckID = mysqli_num_rows($resultID);
        if($resultCheckID > 0){
            while( $id = mysqli_fetch_array($resultID)){
                $idUser = $id['idUser'];
            }
        }


        $sql = "SELECT * FROM events WHERE idUser='$idUser';";
        $result = mysqli_query($conndb, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0){
            while ($row = mysqli_fetch_array($result)){
                echo '
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="https://images.unsplash.com/photo-1580706483913-b6ea7db483a0?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=637&q=80" style="width:300px;height:300px;">
                            </div>
                                <div class="flip-card-back">
                                <h1>'.$row['label'].'</h1> 
                                <p>'.$row['device'].'</p> 
                                <p>'.$row['eventDate'].'</p>
                                <p>'.$row['idRoom'].'</p>
                                <p>'.$row['descripEvent'].'</p>
                                <p>'.$row['importanceEvent'].'</p>
                            </div>
                        </div>
                    </div>
                </div>
                ';
            }
        }else{
            $onclick = "this.parentElement.style.display='none';";
            echo '
            <div class="alert">
            <span class="closebtn" onclick="'.$onclick.'">&times;</span> 
            <strong>Oops!</strong> Indicates you do not have any records yet!!!.
            </div>
            ';
        }
    ?>
        <!-- <div class="card">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="img_avatar.png" alt="Avatar" style="width:300px;height:300px;">
                    </div>
                        <div class="flip-card-back">
                        <h1>LABEL</h1> 
                        <p>NAME USER</p> 
                        <p>DATE</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="img_avatar.png" alt="Avatar" style="width:300px;height:300px;">
                    </div>
                        <div class="flip-card-back">
                        <h1>LABEL</h1> 
                        <p>NAME USER</p> 
                        <p>DATE</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="img_avatar.png" alt="Avatar" style="width:300px;height:300px;">
                    </div>
                        <div class="flip-card-back">
                        <h1>LABEL</h1> 
                        <p>NAME USER</p> 
                        <p>DATE</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="img_avatar.png" alt="Avatar" style="width:300px;height:300px;">
                    </div>
                        <div class="flip-card-back">
                        <h1>LABEL</h1> 
                        <p>NAME USER</p> 
                        <p>DATE</p>
                    </div>
                </div>
            </div>
        </div> -->
        
    </div>

</body>
</html>
