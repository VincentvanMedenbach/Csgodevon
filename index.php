<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Roulette.js Demo</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <script src="jquery.jSlots.js" charset="utf-8"></script>
    <script src="jquery.easing.1.3.js" charset="utf-8"></script>
    <link href='http://fonts.googleapis.com/css?family=Gravitas+One&text=1234567' rel='stylesheet' type='text/css'>
    <link href="css/main.css" rel="script" type="text/css">
    <script> function play(){
            var audio = new Audio("nigger.wav" ) ;
            audio.play();
        }</script>


    <style>
        img{
            width: 100px;
            height: 100px;
        }
        ul {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .jSlots-wrapper {
            overflow: hidden;
            height: 20px;
            display: inline-block; /* to size correctly, can use float too, or width*/
            border: 1px solid #999;
        }

        .slot {
            float: left;
        }

        /* ---------------------------------------------------------------------
           FANCY EXAMPLE
        --------------------------------------------------------------------- */
        .fancy .jSlots-wrapper {
            overflow: hidden;
            height: 100px;
            display: inline-block; /* to size correctly, can use float too, or width*/
            border: 1px solid #999;
        }

        .fancy .slot li {
            width: 100px;
            line-height: 100px;
            text-align: center;
            font-size: 70px;
            font-weight: bold;
            color: #fff;
            text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.8);
            font-family: 'Gravitas One', serif;
            border-left: 1px solid #999;
        }

        .fancy .slot:first-child li {
            border-left: none;
        }

        .fancy .slot li:nth-child(7) {
            background-color: #FFCE29;
        }

        .fancy .slot li:nth-child(6) {
            background-color: #FFA22B;
        }

        .fancy .slot li:nth-child(5) {
            background-color: #FF8645;
        }

        .fancy .slot li:nth-child(4) {
            background-color: #FF6D3F;
        }

        .fancy .slot li:nth-child(3) {
            background-color: #FF494C;
        }

        .fancy .slot li:nth-child(2) {
            background-color: #FF3333;
        }

        .fancy .slot li:nth-child(1),
        .fancy .slot li:nth-child(8) {
            background-color: #FF0000;
        }

        .fancy .slot li span {
            display: block;
        }

        /* ---------------------------------------------------------------------
           ANIMATIONS
        --------------------------------------------------------------------- */

        @-webkit-keyframes winner {
            0%, 50%, 100% {
                -webkit-transform: rotate(0deg);
                font-size: 70px;
                color: #fff;
            }
            25% {
                -webkit-transform: rotate(20deg);
                font-size: 90px;
                color: #FF16D8;
            }
            75% {
                -webkit-transform: rotate(-20deg);
                font-size: 90px;
                color: #FF16D8;
            }
        }

        @-moz-keyframes winner {
            0%, 50%, 100% {
                -moz-transform: rotate(0deg);
                font-size: 70px;
                color: #fff;
            }
            25% {
                -moz-transform: rotate(20deg);
                font-size: 90px;
                color: #FF16D8;
            }
            75% {
                -moz-transform: rotate(-20deg);
                font-size: 90px;
                color: #FF16D8;
            }
        }

        @-ms-keyframes winner {
            0%, 50%, 100% {
                -ms-transform: rotate(0deg);
                font-size: 70px;
                color: #fff;
            }
            25% {
                -ms-transform: rotate(20deg);
                font-size: 90px;
                color: #FF16D8;
            }
            75% {
                -ms-transform: rotate(-20deg);
                font-size: 90px;
                color: #FF16D8;
            }
        }

        @-webkit-keyframes winnerBox {
            0%, 50%, 100% {
                box-shadow: inset 0 0 0px yellow;
                background-color: #FF0000;
            }
            25%, 75% {
                box-shadow: inset 0 0 30px yellow;
                background-color: aqua;
            }
        }

        @-moz-keyframes winnerBox {
            0%, 50%, 100% {
                box-shadow: inset 0 0 0px yellow;
                background-color: #FF0000;
            }
            25%, 75% {
                box-shadow: inset 0 0 30px yellow;
                background-color: aqua;
            }
        }

        @-ms-keyframes winnerBox {
            0%, 50%, 100% {
                box-shadow: inset 0 0 0px yellow;
                background-color: #FF0000;
            }
            25%, 75% {
                box-shadow: inset 0 0 30px yellow;
                background-color: aqua;
            }
        }

        .winner li {
            -webkit-animation: winnerBox 2s infinite linear;
            -moz-animation: winnerBox 2s infinite linear;
            -ms-animation: winnerBox 2s infinite linear;
        }

        .winner li span {
            -webkit-animation: winner 2s infinite linear;
            -moz-animation: winner 2s infinite linear;
            -ms-animation: winner 2s infinite linear;
        }
    </style>
</head>
<body>
<header>
    <h1>Hoe groen kan je dat haar krijgen!!!</h1>
</header>
<div class="fancy">
    <ul class="slot">
        <li><span>
                <img src="Devon/greenvon.png"/>
            </span></li>
        <li><span>
                <img src="Devon/23231461_1465848216862668_3224576765434178130_n.jpg"/>
            </span></li>
        <li><span>
                <img src="Devon/gamblevon.png"/>
            </span></li>
        <li><span>
                <img src="Devon/gaykerstmisdevonedit.jpg"/>
            </span></li>
        <li><span>
                <img src="Devon/hydra.png"/>
            </span></li>
        <li><span>
                <img src="Devon/masterpiece.png"/>
            </span></li>
        <li><span>
                <img src="Devon/devgay.png"/>
            </span></li>
    </ul>
</div>
<input type="button" id="playFancy" value="Play"><br>

<a href="https://shop.spreadshirt.nl/MegaMinecraftMasters">Onze officiele winkel</a>
</body>
<script type="text/javascript" charset="utf-8">

    $('.fancy .slot').jSlots({
        number: 7,
        winnerNumber: 1,
        spinner: '#playFancy',
        easing: 'easeOutSine',
        time: 7000,
        loops: 6,
        onStart: function () {
            $('.slot').removeClass('winner');
        },
        onWin: function (winCount, winners) {
            // only fires if you win
            play();

            $.each(winners, function () {
                this.addClass('winner');
            });

            // react to the # of winning slots
            if (winCount === 1) {
                //alert('You got ' + winCount + ' 7!!!');
            } else if (winCount > 1) {
                //alert('You got ' + winCount + ' 7â€™s!!!');
            }

        }
    });

</script>

