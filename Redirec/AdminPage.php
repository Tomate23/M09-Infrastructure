<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }


        /* body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            font-family: consolas;
        } */

        .container {
            width: 1000px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 15rem;
        }

        .container .card {
            position: relative;
            cursor: pointer;
        }

        .container .card .face {
            width: 300px;
            height: 200px;
            transition: 0.5s;
        }

        .container .card .face.face1 {
            position: relative;
            background: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1;
            transform: translateY(100px);
        }

        .container .card:hover .face.face1 {
            background: #ff0057;
            transform: translateY(0);
        }

        .container .card .face.face1 .content {
            opacity: 0.2;
            transition: 0.5s;
        }

        .container .card:hover .face.face1 .content {
            opacity: 1;
        }

        .container .card .face.face1 .content img {
            max-width: 100px;
        }

        .container .card .face.face1 .content h3 {
            margin: 10px 0 0;
            padding: 0;
            color: #fff;
            text-align: center;
            font-size: 1.5em;
        }

        .container .card .face.face2 {
            position: relative;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            box-sizing: border-box;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.8);
            transform: translateY(-100px);
        }

        .container .card:hover .face.face2 {
            transform: translateY(0);
        }

        .container .card .face.face2 .content p {
            margin: 0;
            padding: 0;
        }

        .container .card .face.face2 .content a {
            margin: 15px 0 0;
            display: inline-block;
            text-decoration: none;
            font-weight: 900;
            color: #333;
            padding: 5px;
            border: 1px solid #333;
        }

        .container .card .face.face2 .content a:hover {
            background: #333;
            color: #fff;
        }

        /* TITLE CSS */
        .title {
            display: flex;
            align-items: flex-end;
            justify-content: start;
            position: relative;
            overflow: hidden;
            width: 40vw;
            height: 30vh;
            color: #0FF369;
            background-color: var(--bg-color);
            font-family: "Maitree", serif;
            background-color: yellow;
        }

        h1 {
            font-size: 3em;
            font-weight: normal;
        }

        /* title styles */
        .home-title span {
            position: relative;
            overflow: hidden;
            display: block;
            line-height: 1.2;
        }

        .home-title span::after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: white;
            animation: a-ltr-after 2s cubic-bezier(0.77, 0, 0.18, 1) forwards;
            transform: translateX(-101%);
        }

        .home-title span::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: var(--bg-color);
            animation: a-ltr-before 2s cubic-bezier(0.77, 0, 0.18, 1) forwards;
            transform: translateX(0);
        }

        .home-title span:nth-of-type(1)::before,
        .home-title span:nth-of-type(1)::after {
            animation-delay: 1s;
        }

        .home-title span:nth-of-type(2)::before,
        .home-title span:nth-of-type(2)::after {
            animation-delay: 1.5s;
        }

        @keyframes a-ltr-after {
            0% {
                transform: translateX(-100%);
            }

            100% {
                transform: translateX(101%);
            }
        }

        @keyframes a-ltr-before {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(200%);
            }
        }

        

        .draw-border {
            box-shadow: inset 0 0 0 4px #58afd1;
            color: #58afd1;
            transition: color 0.25s 0.0833333333s;
            position: relative;
        }

        .draw-border::before,
        .draw-border::after {
            border: 0 solid transparent;
            box-sizing: border-box;
            content: "";
            pointer-events: none;
            position: relative;
            width: 0;
            height: 0;
            bottom: 0;
            right: 0;
        }

        .draw-border::before {
            border-bottom-width: 3px;
            border-left-width: 3px;
        }

        .draw-border::after {
            border-top-width: 3px;
            border-right-width: 3px;
        }

        .draw-border:hover {
            color: #ffe593;
        }

        .draw-border:hover::before,
        .draw-border:hover::after {
            border-color: green;
            transition: border-color 0s, width 0.25s, height 0.25s;
            width: 100%;
            height: 100%;
        }

        .draw-border:hover::before {
            transition-delay: 0s, 0s, 0.25s;
        }

        .draw-border:hover::after {
            transition-delay: 0s, 0.25s, 0s;
        }

        .btn {
            background: none;
            border: none;
            cursor: pointer;
            line-height: 1.5;
            font: 600 1.2rem "Roboto Slab", sans-serif;
            padding: 1em 2em;
            letter-spacing: 0.05rem;
        }

        .btn:focus {
            outline: 2px dotted #55d7dc;
        }

        body {
            background: #1f1a25;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            min-height: 80vh;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator's Page</title>
</head>

<body>
        <a href="../index.php">
            <button class="btn draw-border">Home</button>
        </a>
    <section class="dash">
        <div class="container">
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/design_128.png?raw=true">
                        <h3>Suppliers</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>In this section you are able to see the <b>Suppliers</b> and also you can <mark>Add</mark> new ones.</p>
                        <a href="../Redirec/SupplierPage.php">Read More</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/code_128.png?raw=true">
                        <h3>EventsMGMT</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p><b>Events Management,</b> in this section you can see and delete the events.</p>
                        <a href="Eventsmgmt.php">Read More</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/launch_128.png?raw=true">
                        <h3>Launch</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>Here you can <b>LAUNCH</b> data to the DDBB, means that you can <mark>Insert</mark> new items.</p>
                        <a href="./AddComp.php">Add Component</a>
                        <a href="./AddRoom.php">Add Room</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

</html>