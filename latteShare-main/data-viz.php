<?php
$host = "webdev.iyaclasses.com";
$userid = "mlchen";
$userpw = "Acad275_Chen_7491505710";
$db = "mlchen_commonGrounds";



$mysql = new mysqli(
    $host,
    $userid,
    $userpw,
    $db
); ?>

<html>
<head>
    <style>
        #nav{
            background-color: #DD5F76;
            color: white;
            height: 50px;
            padding: 20px;
        }

        #logo{
            height: 50px;
            width: 50px;
            float: left;
        }

        h1{
            font-family: obviously, sans-serif;
            font-weight: 700;
            font-style: normal;
            font-size: 50pt;
        }

        h3{
            font-family: obviously, sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: 25pt;
        }

        body{
            background-color: #FDFAF1;
            color: #33319F;
            font-size: 16pt;
            font-family: 'Montserrat', sans-serif;
            padding-bottom: 70px;
        }
        #login{
            width: 80px;
            height: 18px;
            padding: 10px;
            background-color: white;
            border-radius: 60px;
            color: #DD5F76;
            font-size: 14pt;
            position: absolute;
            right: 30px;
            top: 25px;
            text-align: center;
            font-family: obviously, sans-serif;
        }

        /*start of my style */

        #title{
            text-align: center;
            margin-top: 50px;
            margin-bottom: 60px;
            padding-left: 5%;
            padding-right: 5%;
        }
        img{
            width: 80%;
            display: block;
            margin: auto;

        }

        #more{
            text-align: center;
            margin-top: 50px;
            padding-left: 5%;
            padding-right: 5%;
        }
        .button{
            border-radius: 50px;
            height: 40px;
            width: 100px;
            margin: auto;
            padding-top: 16px;
            background-color: #33319F;
            font-size: 12pt;
            float: right;
            display: block;
            text-align: center;
        }
        a{
            color: white;
        }
        .menu-item{
            padding-top: 15px;
            font-size: 12pt;
            margin-left: 15px;
            margin-right: 15pt;
            float: left;
            display: block;
        }



    </style>
</head>
<body>
<div id="nav">
    <div id="logo"><img src="../admin-cg/logo.png" id="logo"></div>
    <div class="menu-item"><a href='http://webdev.iyaclasses.com/~slfinnig/acad276/about-us-cg/about.php'> About Us</a> </div>
    <div class="menu-item"><a href='http://webdev.iyaclasses.com/~omitowoj/group/register.php'> Sign Up </a> </div>
    <div class="menu-item"><a href='http://webdev.iyaclasses.com/~slfinnig/acad276/why-us-cg/why-us.php'> Why Us? </a> </div>
    <div class="menu-item"><a href='http://webdev.iyaclasses.com/~slfinnig/acad276/daily-read-cg/daily-read.php'> Daily Read </a> </div>
    <div class="menu-item"><a href='http://webdev.iyaclasses.com/~omitowoj/group/topcafes.php'>Top Cafes </a> </div>
    <div class="button"><a href="login.php">login </a></div>


</div>
<br>
<div id="title">
    <h1>Most Liked Cafes</h1>
    <?php

    $sql_cafe = "SELECT likes, cafename FROM cgView2 ORDER BY likes DESC LIMIT 5";
    $cafe_results = $mysql->query($sql_cafe);
    $counter = 1;
    while($currentrow = $cafe_results->fetch_assoc()) {
        if ($counter == 1){
            $likes1 = $currentrow['cafename'];
            $count1 = $currentrow['likes'];
        }
        elseif ($counter == 2){
            $likes2 = $currentrow['cafename'];
            $count2 = $currentrow['likes'];
        }
        elseif ($counter == 3){
            $likes3 = $currentrow['cafename'];
            $count3 = $currentrow['likes'];
        }
        elseif ($counter == 4){
            $likes4 = $currentrow['cafename'];
            $count4 = $currentrow['likes'];
        }
        elseif ($counter == 5){
            $likes5 = $currentrow['cafename'];
            $count5 = $currentrow['likes'];
        }
        $counter++;
    }

    ?>
    <canvas id="myChart" width="400" height="400"></canvas>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>

        const data = {
            labels:   [ <?php echo "'". $likes1 . "'"?>,
                <?php echo "'". $likes2 . "'" ?>,
                <?php echo "'". $likes3 . "'" ?> ,
                <?php echo "'". $likes4 . "'" ?>,
                <?php echo "'". $likes5 . "'"?>
            ]
            ,
            datasets: [{
                label: 'My First Dataset',
                data: [ <?php echo "'". $count1 . "'" ?> ,
                    <?php echo "'". $count2 . "'" ?> ,
                    <?php echo "'". $count3 . "'" ?> ,
                    <?php echo "'". $count4 . "'" ?> ,
                    <?php echo "'". $count5 . "'" ?>
                ],

                backgroundColor: [
                    'rgba(255, 99, 132,0.3)',
                    'rgba(75, 192, 192,0.3)',
                    'rgba(255, 205, 86,0.3)',
                    'rgba(201, 203, 207,0.3)',
                    'rgba(54, 162, 235,0.3)'
                ]
            }]
        };

        const config = {
            type: 'polarArea',
            data: data,
            options: {}
        };


        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );

    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


</body>
</html>
