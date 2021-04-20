<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
html {
  height: 100%;
}
body {
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: linear-gradient(#141e30, #243b55);
}

.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0, 0, 0, 0.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0, 0, 0, 0.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}
.a{
    background-color: transparent;
    border: none;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top: 0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: 0.5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #03e9f4;
  font-size: 12px;
}

.login-box form .a {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #03e9f4;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: 0.5s;
  margin-top: 40px;
  letter-spacing: 4px;
}

.login-box .a:hover {
  background: #03e9f4;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #03e9f4, 0 0 25px #03e9f4, 0 0 50px #03e9f4,
    0 0 100px #03e9f4;
}

.login-box .a span {
  position: absolute;
  display: block;
}

.login-box .a span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #03e9f4);
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,
  100% {
    left: 100%;
  }
}

.login-box .a span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #03e9f4);
  animation: btn-anim2 1s linear infinite;
  animation-delay: 0.25s;
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,
  100% {
    top: 100%;
  }
}

.login-box .a span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, #03e9f4);
  animation: btn-anim3 1s linear infinite;
  animation-delay: 0.5s;
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,
  100% {
    right: 100%;
  }
}

.login-box .a span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #03e9f4);
  animation: btn-anim4 1s linear infinite;
  animation-delay: 0.75s;
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,
  100% {
    bottom: 100%;
  }
}
.valid {
    background-color: #f44336;
    text-transform: uppercase;
    color: #000;
    border: 1px solid black;
}
.valid2 {
    background-color: green;
    text-transform: uppercase;
    color: #000;
    border: 1px solid black;
}
nav.primary-navigation {
  margin: 0 auto;
  display: block;
  padding: 120px 0 0 0;
  text-align: center;
  font-size: 16px;
  margin-top:-40px;
}
nav.primary-navigation ul li {
  list-style: none;
  margin: 0 auto;
  border-left: 2px solid #3ca0e7;
  display: inline-block;
  padding: 0 30px;
  position: relative;
  text-decoration: none;
  text-align: center;
  font-family: arvo;
}
nav.primary-navigation li a {
  color: black;
}
nav.primary-navigation li a:hover {
  color: #3ca0e7;
}
nav.primary-navigation li:hover {
  cursor: pointer;
}
nav.primary-navigation ul li ul {
  visibility: hidden;
  opacity: 0;
  position: absolute;
  padding-left: 0;
  left: 0;
  display: none;
  background: white;
}
nav.primary-navigation ul li:hover > ul,
nav.primary-navigation ul li ul:hover {
  visibility: visible;
  opacity: 1;
  display: block;
  min-width: 250px;
  text-align: left;
  padding-top: 20px;
  box-shadow: 0px 3px 5px -1px #ccc;
}
nav.primary-navigation ul li ul li {
  clear: both;
  width: 100%;
  text-align: left;
  margin-bottom: 20px;
  border-style: none;
}
nav.primary-navigation ul li ul li a:hover {
  padding-left: 10px;
  border-left: 2px solid #3ca0e7;
  transition: all 0.3s ease;
}

a {
  text-decoration: none;
}
a:hover {
  color: #3ca0e7;
}

ul li ul li a {
  transition: all 0.5s ease;
}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
    <title>Change Pass</title>
</head>
<body>

<nav role="navigation" class="primary-navigation">
  <ul>
<?php
ini_set( "display_errors", 0);
session_start();
if($_SESSION['logged']==true){
    $currentUser = $_SESSION["username"];
    $role = $_SESSION['idRole'];
    
    
}
?>
    <li><a href="../index.php">Home</a></li>

    <!-- <li><a href="#">Work &dtrif;</a>
      <ul class="dropdown">
        <li><a href="#">Web Development</a></li>
        <li><a href="#">Web Design</a></li>
        <li><a href="#">Illustration</a></li>
        <li><a href="#">Iconography</a></li>
      </ul> -->
      
    </li>
    <li><a href="./UpdatePass.php">Change Password</a></li>
    <li><a href="./UpdateMail.php">Change Mail</a></li>
    <?php
      /* if($_SESSION['logged'] && $role=="adm"){
      echo '
        <li><a href="./AddRoom.php">Add Room</a></li>
        <li><a href="./AddComp.php">Add Component</a></li>
      ';

  } */
  ?>
  </ul>
</nav>

<div class="login-box">
  <h2>Change User Form</h2>
  <?php
    if (isset($_SESSION['errorname'])){
        $errormsg = $_SESSION['errorname'];
        echo '<center class="valid">' . $errormsg . '</center>';
        unset($_SESSION['errorname']);
    }
    echo "<br>";
    ?>
  <form action="../Includes-PHP/ChangeUser.php" method="post">
    <div class="user-box">
      <input type="text" name="name" required>
      <label>New User Name</label>
    </div>
    <div class="user-box">
      <input type="text" name="rename" required>
      <label>Retype User Name</label>
    </div>
    <button class="a" type="submit">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Submit
    </button>
  </form>
</div>
</body>
</html>