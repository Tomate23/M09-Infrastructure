<?php
session_start();
$errorMSG = "YOU HAVEN'T LOGED-IN";
if (isset($_SESSION['logged'])) {
} else {
    $_SESSION["errorlogin"] = $errorMSG;
    header("Location: ../Redirec/Login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <style>
        .valid {
            background-color: #f44336;
            text-transform: uppercase;
            color: #000;
            border: 1px solid black;
        }

        *,
        :before,
        :after {
            box-sizing: border-box;
        }

        body {
            background: #ebe6e6;
        }

        .valid {
            background-color: #f44336;
            text-transform: uppercase;
            color: #000;
            border: 1px solid black;
        }

        form {
            width: 320px;
            margin: 45px auto;
        }

        form h1 {
            font-size: 3em;
            font-weight: 300;
            text-align: center;
            color: #2196F3;
        }

        form h5 {
            text-align: center;
            text-transform: uppercase;
            color: #000000;
        }

        form hr.sep {
            background: #2196F3;
            box-shadow: none;
            border: none;
            height: 2px;
            width: 25%;
            margin: 0px auto 45px auto;
        }

        form .emoji {
            font-size: 1.2em;
        }

        .group {
            position: relative;
            margin: 45px 0;
        }

        textarea {
            resize: none;
        }

        input,
        textarea {
            background: none;
            color: #020101;
            font-size: 18px;
            padding: 10px 10px 10px 5px;
            display: block;
            width: 320px;
            border: none;
            border-radius: 0;
            border-bottom: 1px solid #c6c6c6;
        }

        input:focus,
        textarea:focus {
            outline: none;
        }

        input:focus~label,
        input:valid~label,
        textarea:focus~label,
        textarea:valid~label {
            top: -14px;
            font-size: 12px;
            color: #2196F3;
        }

        input:focus~.bar:before,
        textarea:focus~.bar:before {
            width: 320px;
        }

        input[type=password] {
            letter-spacing: 0.3em;
        }

        label {
            color: #000000;
            font-size: 16px;
            font-weight: normal;
            position: absolute;
            pointer-events: none;
            left: 5px;
            top: 10px;
            transition: 300ms ease all;
        }

        .bar {
            position: relative;
            display: block;
            width: 320px;
        }

        .bar:before {
            content: "";
            height: 2px;
            width: 0;
            bottom: 0px;
            position: absolute;
            background: #2196F3;
            transition: 300ms ease all;
            left: 0%;
        }

        .btn {
            background: #fff;
            color: #959595;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            text-decoration: none;
            outline: none;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        .btn:hover {
            color: #8b8b8b;
            box-shadow: 0 7px 14px rgba(0, 0, 0, 0.18), 0 5px 5px rgba(0, 0, 0, 0.12);
        }

        .btn.btn-link {
            background: #2196F3;
            color: #d3eafd;
        }

        .btn.btn-link:hover {
            background: #0d8aee;
            color: #deeffd;
        }

        .btn.btn-submit {
            background: #2196F3;
            color: #bce0fb;
        }

        .btn.btn-submit:hover {
            background: #0d8aee;
            color: #deeffd;
        }

        .btn.btn-cancel {
            background: #eee;
        }

        .btn.btn-cancel:hover {
            background: #e1e1e1;
            color: #8b8b8b;
        }

        .btn-box {
            text-align: center;
            margin: 50px 0;
        }

        /* Dropdown Select */

        .ContainerDrop {
            min-height: 100%;
            margin: 0;
            box-sizing: border-box;
        }

        /*the container must be positioned relative:*/

        .custom-select {
            position: relative;
            font-family: Arial;
        }

        .custom-select select {
            display: none;
            /*hide original SELECT element:*/
        }

        .select-selected {
            background-color: DodgerBlue;
        }

        /*style the arrow inside the select element:*/

        .select-selected:after {
            position: absolute;
            content: "";
            top: 14px;
            right: 10px;
            width: 0;
            height: 0;
            border: 6px solid transparent;
            border-color: #fff transparent transparent transparent;
        }

        /*point the arrow upwards when the select box is open (active):*/

        .select-selected.select-arrow-active:after {
            border-color: transparent transparent #fff transparent;
            top: 7px;
        }

        /*style the items (options), including the selected item:*/

        .select-items div,
        .select-selected {
            color: #ffffff;
            padding: 8px 16px;
            border: 1px solid transparent;
            border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
            cursor: pointer;
            user-select: none;
        }

        /*style items (options):*/

        .select-items {
            position: absolute;
            background-color: DodgerBlue;
            top: 100%;
            left: 0;
            right: 0;
            z-index: 99;
        }

        /*hide the items when the select box is closed:*/

        .select-hide {
            display: none;
        }

        .select-items div:hover,
        .same-as-selected {
            background-color: rgba(0, 0, 0, 0.1);
        }

        /* date of event */

        [type="date"] {
            background: transparent url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png) 97% 50% no-repeat;
        }

        [type="date"]::-webkit-inner-spin-button {
            display: none;
        }

        [type="date"]::-webkit-calendar-picker-indicator {
            opacity: 0;
        }

        /* custom styles */
        /*  body {
            padding: 4em;
            background: #e5e5e5;
            font: 13px/1.4 Geneva, "Lucida Sans", "Lucida Grande", "Lucida Sans Unicode", Verdana, sans-serif;
        } */

        label {
            display: block;
        }

        /* Cool infinite background scrolling animation.
 * Twitter: @kootoopas
 */
        /* Exo thin font from Google. */

        @import url(https://fonts.googleapis.com/css?family=Exo:100);
        /* Background data (Original source: https://subtlepatterns.com/grid-me/) */
        /* Animations */

        @-webkit-keyframes bg-scrolling-reverse {
            100% {
                background-position: 50px 50px;
            }
        }

        @-moz-keyframes bg-scrolling-reverse {
            100% {
                background-position: 50px 50px;
            }
        }

        @-o-keyframes bg-scrolling-reverse {
            100% {
                background-position: 50px 50px;
            }
        }

        @keyframes bg-scrolling-reverse {
            100% {
                background-position: 50px 50px;
            }
        }

        @-webkit-keyframes bg-scrolling {
            0% {
                background-position: 50px 50px;
            }
        }

        @-moz-keyframes bg-scrolling {
            0% {
                background-position: 50px 50px;
            }
        }

        @-o-keyframes bg-scrolling {
            0% {
                background-position: 50px 50px;
            }
        }

        @keyframes bg-scrolling {
            0% {
                background-position: 50px 50px;
            }
        }

        /* Main styles */

        body {
            margin-top: 1rem;
            color: #999;
            font: 400 16px/1.5 exo, ubuntu, "segoe ui", helvetica, arial, sans-serif;
            text-align: center;
            /* img size is 50x50 */
            background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAIAAACRXR/mAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAABnSURBVHja7M5RDYAwDEXRDgmvEocnlrQS2SwUFST9uEfBGWs9c97nbGtDcquqiKhOImLs/UpuzVzWEi1atGjRokWLFi1atGjRokWLFi1atGjRokWLFi1af7Ukz8xWp8z8AAAA//8DAJ4LoEAAlL1nAAAAAElFTkSuQmCC") repeat 0 0;
            -webkit-animation: bg-scrolling-reverse 0.92s infinite;
            /* Safari 4+ */
            -moz-animation: bg-scrolling-reverse 0.92s infinite;
            /* Fx 5+ */
            -o-animation: bg-scrolling-reverse 0.92s infinite;
            /* Opera 12+ */
            animation: bg-scrolling-reverse 0.92s infinite;
            /* IE 10+ */
            -webkit-animation-timing-function: linear;
            -moz-animation-timing-function: linear;
            -o-animation-timing-function: linear;
            animation-timing-function: linear;
        }

        body::before {
            font-size: 8rem;
            font-weight: 100;
            font-style: normal;
        }
    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HardwareForm</title>
</head>

<body>

    <div class="wrapper">
        <form action="../Includes-PHP/event.inc.php" method="post">

            <h1>Hardware Form Event</h1>
            <h5>Inspired by Google's Material Design guidelines for text fields</h5>
            <div class="btn-box"><a class="btn btn-link" href="../index.php">Go Home</a></div>
            <hr class="sep" />
            <div class="group">
                <?php
                ini_set("display_errors", 0);
                session_start();
                if ($_SESSION['logged'] == true) {
                    $currentUser = $_SESSION["username"];
                    $currentMail = $_SESSION["usermail"];
                    echo '<input type="text" name="eventName" required="required" value="' . $currentUser . '" /><span class="highlight"></span><span class="bar"></span>
                    <label>Name</label>
                </div>
                <div class="group">
                    <input type="text" name="mailEvent" required="required" value="' . $currentMail . '" /><span class="highlight"></span><span class="bar"></span>
                    <label>Email</label>
                </div>';
                } elseif ($_SESSION['logged'] == false) {
                    echo '<input type="text" name="eventName" required="required" /><span class="highlight"></span><span class="bar"></span>
                    <label>Name</label>
                </div>
                <div class="group">
                    <input type="text" name="mailEvent" required="required" /><span class="highlight"></span><span class="bar"></span>
                    <label>Email</label>
                </div>';
                }
                ?>

                <div class="group">
                    <input type="text" name="deviceLabel" required="required" /><span class="highlight"></span><span class="bar"></span>
                    <label>Device Label</label>
                </div>

                <div class="custom-select" style="width:200px; border-radius:3px;">
                    <select name="options" required>
                        <option value="0">Select Device:</option>
                        <option value="Keyboard">Keyboard</option>
                        <option value="Mouse">Mouse</option>
                        <option value="Projector">Projector</option>
                        <option value="Speakers">Speakers</option>
                        <option value="Wifi">Wifi</option>
                        <option value="wires">wires</option>
                        <option value="Network">Network</option>
                        <option value="PC Case">PC Case</option>
                        <option value="Screen">Screen</option>
                        <option value="Forniture">Forniture</option>
                    </select>
                </div>

                <br>
                <br>

                <label for="dateofbirth"></label>
                <input type="date" name="dateofevent" id="dateofevent" required="required">
                <br>
                <div class="custom-select" style="width:200px; border-radius:3px;">
                    <select name="optionsroom" required>
                        <option value="0">Room:</option>
                        <option value="ASIX-06">ASIX-06</option>
                        <option value="ASIX-07">ASIX-07</option>
                        <option value="BTX-01">BTX-01</option>
                        <option value="BTX-02">BTX-02</option>
                        <option value="ESO-01">ESO-01</option>
                        <option value="ESO-02">ESO-02</option>
                    </select>
                </div>
                <br>
                <div class="custom-select" style="width:200px; border-radius:3px;">
                    <select name="options2" required>
                        <option value="0">Gravedad:</option>
                        <option value="Terminal inutilitzable, no es pot treballar.">Terminal inutilitzable, no es pot treballar.</option>
                        <option value="Es pot treballar però és bastant incomode.">Es pot treballar però és bastant incomode.</option>
                        <option value="A vegades molesta, però podem anar fent.">A vegades molesta, però podem anar fent.</option>
                        <option value="És un problema bàsicament estètic, no molesta gaire.">És un problema bàsicament estètic, no molesta gaire.</option>
                    </select>
                </div>


                <div class="group">
                    <textarea type="textarea" rows="5" name="descrip"></textarea><span class="highlight"></span><span class="bar"></span>
                    <label>Description</label>
                </div>

                <div class="btn-box">
                    <button class="btn btn-submit" type="submit">submit</button>
                    <a class="btn btn-cancel" type="button" href="../index.php">cancel</a>
                    <h5>REMEMBER YOU ARE PICANTE <span class="emoji">&#127798;&#65039;</span></h5>
                </div>
        </form>
    </div>

    <script>
        var x, i, j, l, ll, selElmnt, a, b, c;
        /*look for any elements with the class "custom-select":*/
        x = document.getElementsByClassName("custom-select");
        l = x.length;
        for (i = 0; i < l; i++) {
            selElmnt = x[i].getElementsByTagName("select")[0];
            ll = selElmnt.length;
            /*for each element, create a new DIV that will act as the selected item:*/
            a = document.createElement("DIV");
            a.setAttribute("class", "select-selected");
            a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
            x[i].appendChild(a);
            /*for each element, create a new DIV that will contain the option list:*/
            b = document.createElement("DIV");
            b.setAttribute("class", "select-items select-hide");
            for (j = 1; j < ll; j++) {
                /*for each option in the original select element,
                create a new DIV that will act as an option item:*/
                c = document.createElement("DIV");
                c.innerHTML = selElmnt.options[j].innerHTML;
                c.addEventListener("click", function(e) {
                    /*when an item is clicked, update the original select box,
                    and the selected item:*/
                    var y, i, k, s, h, sl, yl;
                    s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                    sl = s.length;
                    h = this.parentNode.previousSibling;
                    for (i = 0; i < sl; i++) {
                        if (s.options[i].innerHTML == this.innerHTML) {
                            s.selectedIndex = i;
                            h.innerHTML = this.innerHTML;
                            y = this.parentNode.getElementsByClassName("same-as-selected");
                            yl = y.length;
                            for (k = 0; k < yl; k++) {
                                y[k].removeAttribute("class");
                            }
                            this.setAttribute("class", "same-as-selected");
                            break;
                        }
                    }
                    h.click();
                });
                b.appendChild(c);
            }
            x[i].appendChild(b);
            a.addEventListener("click", function(e) {
                /*when the select box is clicked, close any other select boxes,
                and open/close the current select box:*/
                e.stopPropagation();
                closeAllSelect(this);
                this.nextSibling.classList.toggle("select-hide");
                this.classList.toggle("select-arrow-active");
            });
        }

        function closeAllSelect(elmnt) {
            /*a function that will close all select boxes in the document,
            except the current select box:*/
            var x, y, i, xl, yl, arrNo = [];
            x = document.getElementsByClassName("select-items");
            y = document.getElementsByClassName("select-selected");
            xl = x.length;
            yl = y.length;
            for (i = 0; i < yl; i++) {
                if (elmnt == y[i]) {
                    arrNo.push(i)
                } else {
                    y[i].classList.remove("select-arrow-active");
                }
            }
            for (i = 0; i < xl; i++) {
                if (arrNo.indexOf(i)) {
                    x[i].classList.add("select-hide");
                }
            }
        }
        /*if the user clicks anywhere outside the select box,
        then close all select boxes:*/
        document.addEventListener("click", closeAllSelect);
    </script>
</body>

</html>