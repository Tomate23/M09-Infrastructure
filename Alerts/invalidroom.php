<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            margin: 0;
            font-size: 20px;
        }

        * {
            box-sizing: border-box;
        }

        .container {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: white;
            color: black;
            font-family: arial, sans-serif;
            overflow: hidden;
        }

        .content {
            position: relative;
            width: 600px;
            max-width: 100%;
            margin: 20px;
            background: white;
            padding: 60px 40px;
            text-align: center;
            box-shadow: -10px 10px 67px -12px rgba(0, 0, 0, 0.2);
            opacity: 0;
            animation: apparition 0.8s 1.2s cubic-bezier(0.39, 0.575, 0.28, 0.995) forwards;
        }

        .content p {
            font-size: 1.3rem;
            margin-top: 0;
            margin-bottom: 0.6rem;
            letter-spacing: 0.1rem;
            color: #595959;
        }

        .content p:last-child {
            margin-bottom: 0;
        }

        .content button {
            display: inline-block;
            margin-top: 2rem;
            padding: 0.5rem 1rem;
            border: 3px solid #595959;
            background: transparent;
            font-size: 1rem;
            color: #595959;
            text-decoration: none;
            cursor: pointer;
            font-weight: bold;
        }

        .particle {
            position: absolute;
            display: block;
            pointer-events: none;
        }

        .particle:nth-child(1) {
            top: 14.5631067961%;
            left: 22.4609375%;
            font-size: 24px;
            filter: blur(0.02px);
            animation: 26s float2 infinite;
        }

        .particle:nth-child(2) {
            top: 95.4933008526%;
            left: 64.6425073457%;
            font-size: 21px;
            filter: blur(0.04px);
            animation: 26s float2 infinite;
        }

        .particle:nth-child(3) {
            top: 74.7572815534%;
            left: 89.84375%;
            font-size: 24px;
            filter: blur(0.06px);
            animation: 28s float2 infinite;
        }

        .particle:nth-child(4) {
            top: 45.8536585366%;
            left: 4.9019607843%;
            font-size: 20px;
            filter: blur(0.08px);
            animation: 30s float infinite;
        }

        .particle:nth-child(5) {
            top: 9.8039215686%;
            left: 24.6062992126%;
            font-size: 16px;
            filter: blur(0.1px);
            animation: 37s float infinite;
        }

        .particle:nth-child(6) {
            top: 63.4920634921%;
            left: 4.9067713445%;
            font-size: 19px;
            filter: blur(0.12px);
            animation: 25s floatReverse2 infinite;
        }

        .particle:nth-child(7) {
            top: 13.6253041363%;
            left: 59.686888454%;
            font-size: 22px;
            filter: blur(0.14px);
            animation: 23s floatReverse2 infinite;
        }

        .particle:nth-child(8) {
            top: 4.8484848485%;
            left: 89.756097561%;
            font-size: 25px;
            filter: blur(0.16px);
            animation: 28s float infinite;
        }

        .particle:nth-child(9) {
            top: 73.0816077954%;
            left: 92.0666013712%;
            font-size: 21px;
            filter: blur(0.18px);
            animation: 36s float infinite;
        }

        .particle:nth-child(10) {
            top: 80.2937576499%;
            left: 60.9636184857%;
            font-size: 17px;
            filter: blur(0.2px);
            animation: 33s floatReverse infinite;
        }

        .particle:nth-child(11) {
            top: 69.6932515337%;
            left: 80.7881773399%;
            font-size: 15px;
            filter: blur(0.22px);
            animation: 34s floatReverse infinite;
        }

        .particle:nth-child(12) {
            top: 68.932038835%;
            left: 70.3125%;
            font-size: 24px;
            filter: blur(0.24px);
            animation: 25s float infinite;
        }

        .particle:nth-child(13) {
            top: 30.2808302808%;
            left: 93.2286555447%;
            font-size: 19px;
            filter: blur(0.26px);
            animation: 24s float2 infinite;
        }

        .particle:nth-child(14) {
            top: 44.3349753695%;
            left: 94.8616600791%;
            font-size: 12px;
            filter: blur(0.28px);
            animation: 29s floatReverse2 infinite;
        }

        .particle:nth-child(15) {
            top: 12.6984126984%;
            left: 10.7948969578%;
            font-size: 19px;
            filter: blur(0.3px);
            animation: 27s floatReverse2 infinite;
        }

        .particle:nth-child(16) {
            top: 2.9520295203%;
            left: 93.7808489635%;
            font-size: 13px;
            filter: blur(0.32px);
            animation: 24s float2 infinite;
        }

        .particle:nth-child(17) {
            top: 57.5609756098%;
            left: 4.9019607843%;
            font-size: 20px;
            filter: blur(0.34px);
            animation: 36s float infinite;
        }

        .particle:nth-child(18) {
            top: 3.8929440389%;
            left: 75.3424657534%;
            font-size: 22px;
            filter: blur(0.36px);
            animation: 25s floatReverse2 infinite;
        }

        .particle:nth-child(19) {
            top: 57.0024570025%;
            left: 84.8126232742%;
            font-size: 14px;
            filter: blur(0.38px);
            animation: 29s floatReverse infinite;
        }

        .particle:nth-child(20) {
            top: 52.3636363636%;
            left: 53.6585365854%;
            font-size: 25px;
            filter: blur(0.4px);
            animation: 29s float infinite;
        }

        .particle:nth-child(21) {
            top: 68.2926829268%;
            left: 55.8823529412%;
            font-size: 20px;
            filter: blur(0.42px);
            animation: 40s floatReverse infinite;
        }

        .particle:nth-child(22) {
            top: 66.6666666667%;
            left: 47.2440944882%;
            font-size: 16px;
            filter: blur(0.44px);
            animation: 32s floatReverse2 infinite;
        }

        .particle:nth-child(23) {
            top: 4.9321824908%;
            left: 78.1404549951%;
            font-size: 11px;
            filter: blur(0.46px);
            animation: 40s floatReverse2 infinite;
        }

        .particle:nth-child(24) {
            top: 64.3902439024%;
            left: 82.3529411765%;
            font-size: 20px;
            filter: blur(0.48px);
            animation: 21s floatReverse infinite;
        }

        .particle:nth-child(25) {
            top: 64%;
            left: 94.6341463415%;
            font-size: 25px;
            filter: blur(0.5px);
            animation: 36s float infinite;
        }

        .particle:nth-child(26) {
            top: 77.2946859903%;
            left: 39.8832684825%;
            font-size: 28px;
            filter: blur(0.52px);
            animation: 22s float infinite;
        }

        .particle:nth-child(27) {
            top: 64.2335766423%;
            left: 81.2133072407%;
            font-size: 22px;
            filter: blur(0.54px);
            animation: 35s float2 infinite;
        }

        .particle:nth-child(28) {
            top: 11.7647058824%;
            left: 36.4173228346%;
            font-size: 16px;
            filter: blur(0.56px);
            animation: 38s floatReverse2 infinite;
        }

        .particle:nth-child(29) {
            top: 88.4568651276%;
            left: 38.1231671554%;
            font-size: 23px;
            filter: blur(0.58px);
            animation: 39s float2 infinite;
        }

        .particle:nth-child(30) {
            top: 91.4004914005%;
            left: 28.5996055227%;
            font-size: 14px;
            filter: blur(0.6px);
            animation: 33s floatReverse2 infinite;
        }

        .particle:nth-child(31) {
            top: 23.5872235872%;
            left: 34.516765286%;
            font-size: 14px;
            filter: blur(0.62px);
            animation: 37s float infinite;
        }

        .particle:nth-child(32) {
            top: 49.2753623188%;
            left: 21.4007782101%;
            font-size: 28px;
            filter: blur(0.64px);
            animation: 36s float infinite;
        }

        .particle:nth-child(33) {
            top: 0.9661835749%;
            left: 50.5836575875%;
            font-size: 28px;
            filter: blur(0.66px);
            animation: 31s float infinite;
        }

        .particle:nth-child(34) {
            top: 36.8484848485%;
            left: 58.5365853659%;
            font-size: 25px;
            filter: blur(0.68px);
            animation: 28s float infinite;
        }

        .particle:nth-child(35) {
            top: 11.7073170732%;
            left: 86.2745098039%;
            font-size: 20px;
            filter: blur(0.7px);
            animation: 32s float infinite;
        }

        .particle:nth-child(36) {
            top: 62.2114216282%;
            left: 93.8416422287%;
            font-size: 23px;
            filter: blur(0.72px);
            animation: 26s floatReverse2 infinite;
        }

        .particle:nth-child(37) {
            top: 0.9791921665%;
            left: 82.5958702065%;
            font-size: 17px;
            filter: blur(0.74px);
            animation: 35s float infinite;
        }

        .particle:nth-child(38) {
            top: 50.7317073171%;
            left: 92.1568627451%;
            font-size: 20px;
            filter: blur(0.76px);
            animation: 28s floatReverse2 infinite;
        }

        .particle:nth-child(39) {
            top: 97.2972972973%;
            left: 21.6962524655%;
            font-size: 14px;
            filter: blur(0.78px);
            animation: 39s float2 infinite;
        }

        .particle:nth-child(40) {
            top: 59.9758162031%;
            left: 69.1333982473%;
            font-size: 27px;
            filter: blur(0.8px);
            animation: 29s floatReverse2 infinite;
        }

        .particle:nth-child(41) {
            top: 83.698296837%;
            left: 2.9354207436%;
            font-size: 22px;
            filter: blur(0.82px);
            animation: 23s float infinite;
        }

        .particle:nth-child(42) {
            top: 51.1459589867%;
            left: 11.6618075802%;
            font-size: 29px;
            filter: blur(0.84px);
            animation: 39s floatReverse infinite;
        }

        .particle:nth-child(43) {
            top: 1.9347037485%;
            left: 87.6338851022%;
            font-size: 27px;
            filter: blur(0.86px);
            animation: 33s float2 infinite;
        }

        .particle:nth-child(44) {
            top: 61.0086100861%;
            left: 74.0375123396%;
            font-size: 13px;
            filter: blur(0.88px);
            animation: 23s float infinite;
        }

        .particle:nth-child(45) {
            top: 40.4819277108%;
            left: 38.8349514563%;
            font-size: 30px;
            filter: blur(0.9px);
            animation: 24s floatReverse infinite;
        }

        .particle:nth-child(46) {
            top: 80.195599022%;
            left: 3.9292730845%;
            font-size: 18px;
            filter: blur(0.92px);
            animation: 32s floatReverse2 infinite;
        }

        .particle:nth-child(47) {
            top: 67.4698795181%;
            left: 28.1553398058%;
            font-size: 30px;
            filter: blur(0.94px);
            animation: 22s floatReverse infinite;
        }

        .particle:nth-child(48) {
            top: 90.8424908425%;
            left: 55.9371933268%;
            font-size: 19px;
            filter: blur(0.96px);
            animation: 37s floatReverse infinite;
        }

        .particle:nth-child(49) {
            top: 30.0242130751%;
            left: 30.2144249513%;
            font-size: 26px;
            filter: blur(0.98px);
            animation: 34s float infinite;
        }

        .particle:nth-child(50) {
            top: 59.7590361446%;
            left: 13.5922330097%;
            font-size: 30px;
            filter: blur(1px);
            animation: 31s floatReverse infinite;
        }

        .particle:nth-child(51) {
            top: 79.704797048%;
            left: 93.7808489635%;
            font-size: 13px;
            filter: blur(1.02px);
            animation: 35s float2 infinite;
        }

        .particle:nth-child(52) {
            top: 5.8608058608%;
            left: 66.7320902846%;
            font-size: 19px;
            filter: blur(1.04px);
            animation: 26s float infinite;
        }

        .particle:nth-child(53) {
            top: 17.6904176904%;
            left: 68.0473372781%;
            font-size: 14px;
            filter: blur(1.06px);
            animation: 24s float2 infinite;
        }

        .particle:nth-child(54) {
            top: 14.5808019441%;
            left: 85.0439882698%;
            font-size: 23px;
            filter: blur(1.08px);
            animation: 26s floatReverse2 infinite;
        }

        .particle:nth-child(55) {
            top: 60.9336609337%;
            left: 19.7238658777%;
            font-size: 14px;
            filter: blur(1.1px);
            animation: 21s float2 infinite;
        }

        .particle:nth-child(56) {
            top: 72.3716381418%;
            left: 43.2220039293%;
            font-size: 18px;
            filter: blur(1.12px);
            animation: 22s floatReverse infinite;
        }

        .particle:nth-child(57) {
            top: 87.7108433735%;
            left: 65.0485436893%;
            font-size: 30px;
            filter: blur(1.14px);
            animation: 38s floatReverse2 infinite;
        }

        .particle:nth-child(58) {
            top: 58.9371980676%;
            left: 67.1206225681%;
            font-size: 28px;
            filter: blur(1.16px);
            animation: 29s floatReverse infinite;
        }

        .particle:nth-child(59) {
            top: 13.7086903305%;
            left: 24.5821042281%;
            font-size: 17px;
            filter: blur(1.18px);
            animation: 32s float2 infinite;
        }

        .particle:nth-child(60) {
            top: 68.0641183724%;
            left: 88.0316518299%;
            font-size: 11px;
            filter: blur(1.2px);
            animation: 23s floatReverse2 infinite;
        }

        .particle:nth-child(61) {
            top: 53.9759036145%;
            left: 2.9126213592%;
            font-size: 30px;
            filter: blur(1.22px);
            animation: 31s floatReverse infinite;
        }

        .particle:nth-child(62) {
            top: 72.3763570567%;
            left: 28.1827016521%;
            font-size: 29px;
            filter: blur(1.24px);
            animation: 22s floatReverse2 infinite;
        }

        .particle:nth-child(63) {
            top: 64.578313253%;
            left: 60.1941747573%;
            font-size: 30px;
            filter: blur(1.26px);
            animation: 33s float infinite;
        }

        .particle:nth-child(64) {
            top: 68.0641183724%;
            left: 28.684470821%;
            font-size: 11px;
            filter: blur(1.28px);
            animation: 28s floatReverse2 infinite;
        }

        .particle:nth-child(65) {
            top: 28.2582216809%;
            left: 18.6092066601%;
            font-size: 21px;
            filter: blur(1.3px);
            animation: 35s float infinite;
        }

        .particle:nth-child(66) {
            top: 51.5188335358%;
            left: 40.0782013685%;
            font-size: 23px;
            filter: blur(1.32px);
            animation: 25s float2 infinite;
        }

        .particle:nth-child(67) {
            top: 9.8159509202%;
            left: 43.3497536946%;
            font-size: 15px;
            filter: blur(1.34px);
            animation: 24s float2 infinite;
        }

        .particle:nth-child(68) {
            top: 6.8043742406%;
            left: 97.7517106549%;
            font-size: 23px;
            filter: blur(1.36px);
            animation: 32s float infinite;
        }

        .particle:nth-child(69) {
            top: 92.7250308261%;
            left: 15.8259149357%;
            font-size: 11px;
            filter: blur(1.38px);
            animation: 28s floatReverse2 infinite;
        }

        .particle:nth-child(70) {
            top: 24.3902439024%;
            left: 0.9803921569%;
            font-size: 20px;
            filter: blur(1.4px);
            animation: 38s float infinite;
        }

        .particle:nth-child(71) {
            top: 92.9782082324%;
            left: 2.9239766082%;
            font-size: 26px;
            filter: blur(1.42px);
            animation: 23s float2 infinite;
        }

        .particle:nth-child(72) {
            top: 65.5421686747%;
            left: 10.6796116505%;
            font-size: 30px;
            filter: blur(1.44px);
            animation: 35s floatReverse2 infinite;
        }

        .particle:nth-child(73) {
            top: 7.7669902913%;
            left: 15.625%;
            font-size: 24px;
            filter: blur(1.46px);
            animation: 32s float2 infinite;
        }

        .particle:nth-child(74) {
            top: 91.4841849148%;
            left: 89.0410958904%;
            font-size: 22px;
            filter: blur(1.48px);
            animation: 30s floatReverse2 infinite;
        }

        .particle:nth-child(75) {
            top: 35.3374233129%;
            left: 62.0689655172%;
            font-size: 15px;
            filter: blur(1.5px);
            animation: 30s float infinite;
        }

        .particle:nth-child(76) {
            top: 69.6493349456%;
            left: 90.5550146056%;
            font-size: 27px;
            filter: blur(1.52px);
            animation: 34s floatReverse infinite;
        }

        .particle:nth-child(77) {
            top: 18.401937046%;
            left: 88.693957115%;
            font-size: 26px;
            filter: blur(1.54px);
            animation: 21s floatReverse infinite;
        }

        .particle:nth-child(78) {
            top: 57.7017114914%;
            left: 47.1512770138%;
            font-size: 18px;
            filter: blur(1.56px);
            animation: 24s floatReverse infinite;
        }

        .particle:nth-child(79) {
            top: 17.6470588235%;
            left: 44.2913385827%;
            font-size: 16px;
            filter: blur(1.58px);
            animation: 33s float2 infinite;
        }

        .particle:nth-child(80) {
            top: 15.421686747%;
            left: 10.6796116505%;
            font-size: 30px;
            filter: blur(1.6px);
            animation: 31s floatReverse infinite;
        }

        @keyframes apparition {
            from {
                opacity: 0;
                transform: translateY(100px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(180px);
            }
        }

        @keyframes floatReverse {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-180px);
            }
        }

        @keyframes float2 {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(28px);
            }
        }

        @keyframes floatReverse2 {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-28px);
            }
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERROR</title>
</head>

<body>

</body>
<main class='container'>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>E</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <span class='particle'>R</span>
    <article class='content'>
        <p>ERROR,</p>
        <p>You got lost in the <strong>Room ID</strong> value.</p>
        <a href="javascript:history.back()">
            <button>Go back to earth.</button>
        </a>
    </article>
</main>

</html>
