<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        * {
            margin: 0 auto;
            padding: 0;
        }

        *:focus {
            outline: none;
        }

        body {
            margin-top: 70px;
            background-color: #f4f4f4;
            font-family: "Raleway", sans-serif;
            font-size: 62.5%;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        h1,
        p,
        a,
        span {
            color: #fff;
            letter-spacing: 0.02em;
            font-weight: 600;
        }

        h1,
        p,
        a {
            padding-left: 40px;
        }

        h1 {
            font-size: 2.5em;
        }

        p {
            font-size: 1.5em;
            line-height: 25px;
        }

        button {
            border: 0;
            border-radius: 26px;
            padding-bottom: 2px;
        }

        span {
            font-size: 1.6em;
        }

        .container,
        .flip-box,
        .front,
        .back {
            width: 380px;
            height: 350px;
        }

        .container,
        .flip_box {
            position: relative;
        }

        .front,
        .back {
            position: absolute;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .container {
            -moz-transform: perspective(1200px);
            -webkit-perspective: 1200px;
            perspective: 1200px;
        }

        .flip_box {
            transition: all 0.5s ease-out;
            -webkit-transform-style: preserve-3d;
            -moz-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .front {
            background-color: #024395;
            /* background-image: url("https://img-fotki.yandex.ru/get/194550/29644339.5/0_d6c5f_c9f15850_orig"); */
            background-image: url("https://raw.githubusercontent.com/Tomate23/Images/73471b7f69d9c677d7b5c00b2e710d4b2bd87fc9/information-sign.svg");
            color: black;
        }

        .f_title {
            padding-top: 30px;
        }

        .f_subline {
            padding-top: 205px;
            color: #b1d4e8;
        }

        .f_headline {
            line-height: 23px;
        }

        .back {
            background-color: #d21849;
            -webkit-transform: rotateY(180deg);
            -moz-transform: rotateY(180deg);
            -ms-transform: rotateY(180deg);
            transform: rotateY(180deg);
        }

        .b_headline {
            padding-top: 50px;
        }

        .b_text {
            font-size: 1.4em;
            line-height: 28px;
            padding-top: 10px;
            opacity: 0.85;
        }

        .b_button {
            position: absolute;
            left: 36px;
            bottom: 38px;
            width: 150px;
            height: 52px;
            background-color: #c30c3d;
            transition: all 0.3s;
        }

        .b_button:hover {
            background-color: #e30143;
        }

        .flipped {
            -webkit-transform: rotateY(-180deg);
            -moz-transform: rotateY(-180deg);
            -ms-transform: rotateY(-180deg);
            transform: rotateY(-180deg);
        }

        .r_wrap {
            position: absolute;
            right: 40px;
            bottom: 38px;
        }

        .b_round,
        .s_round {
            position: absolute;
            right: 0px;
            bottom: 0px;
            width: 52px;
            height: 52px;
            border-radius: 50%;
            background-color: #d21849;
            transition: all 0.2s linear;
        }

        .b_round {
            opacity: 0;
            background-color: #d21849;
        }

        .b_round_hover {
            transform: scale(1.37);
            opacity: 0.4;
        }

        .b_round_back_hover {
            background-color: #f60044;
        }

        .s_round_click {
            transform: scale(1.7);
        }

        .s_round_back {
            background-color: #c30c3d;
        }

        .s_arrow {
            width: 52px;
            height: 52px;
            background-image: url("https://img-fotki.yandex.ru/get/194549/29644339.5/0_d6c60_1d7815f0_orig");
            background-color: transparent;
            transition: all 0.35s linear;
        }

        .s_arrow_rotate {
            transform: rotate(-180deg);
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Urevent</title>
</head>

<body>
    <div class='container'>

        <div class='flip_box'>
        <?php
        echo "
            <div class='front'>
                <p class='f_title'>Your Event Report</p>
                <p class='f_subline'>User:</p>
                <h1 class='f_headline'>".$user."</h1>
            </div>
            <div class='back'>
                <h1 class='b_headline'>".$eventroom."  ".$eventdate."</h1>
                <p class='b_text'>Device: ".$eventLabel." - ".$eventDevice."<br/>Where: ".$eventroom." F(".$eventfloor.")<br/>User mail: ".$mail."<br/>Thanks for your event's report <br/>We'll fix it soon</p>
                <a href='../index.php'>
                    <button class='b_button'><span>Home</span></button>
                </a>
            </div>
            ";
        ?>
            <!-- <div class='front'>
                <p class='f_title'>Your Event Report</p>
                <p class='f_subline'>User:</p>
                <h1 class='f_headline'>Absolute safety</h1>
            </div> -->

            <!-- <div class='back'>
                <h1 class='b_headline'>Absolute safety</h1>
                <p class='b_text'>Comprehensive insurance of apartments<br />including structural elements, decoration,<br /> equipment, property and responsibility<br />to neighbors in the expanded package<br />insurance risks</p>
                <a href="../index.php">
                    <button class='b_button'><span>Buy now</span></button>
                </a>
            </div> -->

        </div>

        <div class='r_wrap'>

            <div class='b_round'></div>
            <div class='s_round'>
                <div class='s_arrow'></div>
            </div>
        </div>

    </div>
    <script>
        $(document).ready(function() {
            var s_round = ".s_round";

            $(s_round).hover(function() {
                $(".b_round").toggleClass("b_round_hover");
                return false;
            });

            $(s_round).click(function() {
                $(".flip_box").toggleClass("flipped");
                $(this).addClass("s_round_click");
                $(".s_arrow").toggleClass("s_arrow_rotate");
                $(".b_round").toggleClass("b_round_back_hover");
                return false;
            });

            $(s_round).on("transitionend", function() {
                $(this).removeClass("s_round_click");
                $(this).addClass("s_round_back");
                return false;
            });
        });
    </script>
</body>

</html>
