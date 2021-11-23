<?php
$host = "webdev.iyaclasses.com";
$userid = "omitowoj";
$userpw = "Acad275_Omitowoju_2813341101";
$db = "omitowoj_commongrounds";

$mysql = new mysqli(
    $host,
    $userid,
    $userpw,
    $db
);

if($mysql->connect_errno) {
    echo "db connection error : " . $mysql->connect_error;
    exit();
}
?>



<html>
<head>

    <link rel="stylesheet" href="commgr-stylesheet.css">
    <title>Common Grounds - Home</title>

    <style>
        h3{
            text-align: center;
        }
        h2{
            font-family: obviously, sans-serif;
            font-weight: 700;
            font-style: normal;
            font-size: 30pt;
        }

        body{
            background-color: #FDFAF1;
            color: #33319F;
            font-size: 16pt;
            font-family: 'Montserrat', sans-serif;
        }
        form{
            text-align: left;
            margin-left: 40%;
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
        h1{
            text-align: center;
            margin-top: 150px;

        }
        #description{
            width: 70%;
            position: absolute;
            top: 300px;
            margin-left: 15%;
            line-height: 1.2;
            text-align: center;
            font-size: x-large;
        }
        input[type=submit]{
            background-color: #FDFAF1;
            font-family: 'Lekton', sans-serif;
            color: #DD5F76;
            width: 70px;
            height: 40px;
            border-radius: 60px;
            border: #FDFAF1 1px solid;
            margin-top: 50px;
            font-size: 14pt;
        }

        #title{
            display: block;
            width: 50%;
            margin: auto;
        }
        #title-box{
            display: block;
            width: 100%;
            margin: auto;
        }
        #aboutus{
            width: 48%;
            height: 40%;
            position: absolute;
            left: 0%;
            top: 100%;
            padding: 2%;
            float: left;
            color: white;
            background-color: #3D9E41;
            text-align: center;
        }

        #getstarted{
            width: 48%;
            height: 40%;
            position: absolute;
            left: 50%;
            top: 100%;
            padding: 2%;
            border-top: #33319F;
            float: left;
            background-color: #DD5F76;
            color: white;
            text-align: center;
        }
        form{
            border-radius: 50px;
            border: #33319F 2px solid;
            width: 70%;
            height: 40%;
            position: absolute;
            top: 450px;
            margin-left: 15%;
            line-height: 1.1;
        }
        .textbox{
            border: #33319F 1.5px solid;
            height: 40px;
            border-radius: 50px;
            color: #33319F;
            padding: 2%;
        }
        .button{
            border-radius: 50px;
            height: 8%;
            width: 24%;
            margin-left: 38%;
            background-color: #33319F;
            font-size: medium;
        }
        .container{
            padding-left: 5%;
            float: left;
            width: 40%;
        }
        #submit{
            border-radius: 50px;
            height: 8%;
            width: 24%;
            background-color: #33319F;
            font-size: medium;
            font-family: 'Montserrat', sans-serif;
            color: white;
        }
    </style>



</head>

<body>
<div id="nav">
    <div id="logo"><img src="logo.png" id="logo"></div>
    <div id="login">log in</div>

</div>
<br><br><br><br><br>
<div id="title-box"><img src="https://raw.githubusercontent.com/adityaguruprasad/latteShare/main/cg-title.png" id="title"></div>

<div id="description">
is a database service that helps our users find the best cafes around them for their workflow. Whether it be having enough
    sitting, WiFi, or just overall vibes of the space, Common Grounds caters to your needs to find the perfect space for you!

</div>

<form action="cgresults.php">
    <h3>What're you looking for?</h3>
    <div class="container">
        Location:
        <select name="location" class="textbox">
            <option value="ALL">Any Location</option>
            <?php

            $sql = "SELECT * FROM location";

            $results = $mysql->query($sql);

            if(!$results) {
                echo "SQL problem: " .
                    $mysql->error ;
                exit();
            }

            while($currentrow = $results->fetch_assoc()) {
                echo "<option>" . $currentrow['location'] . "</option>";
            }
            ?>

        </select>
        <br><br>
        Seating:
        <select name="seatingtype" class="textbox">
            <option value="ALL">Any Seating Type</option>
            <?php

            $sql = "SELECT * FROM seating_type";

            $results = $mysql->query($sql);

            if(!$results) {
                echo "SQL problem: " .
                    $mysql->error ;
                exit();
            }

            while($currentrow = $results->fetch_assoc()) {
                echo "<option>" . $currentrow['seatingtype'] . "</option>";
            }
            ?>

        </select>
        <br><br>
        Ratings:
        <select name="outlet" class="textbox">
            <option value="ALL">Any Rating</option>
            <?php

            $sql = "SELECT * FROM ratings";

            $results = $mysql->query($sql);

            if(!$results) {
                echo "SQL problem: " .
                    $mysql->error ;
                exit();
            }

            while($currentrow = $results->fetch_assoc()) {
                echo "<option>" . $currentrow['rating'] . "</option>";
            }
            ?>
        </select>
    </div>
    <div class="container">
        WiFi:
        <select name="internet" class="textbox">
            <option value="ALL">Any Internet Availability</option>
            <?php

            $sql = "SELECT * FROM internet_availability";

            $results = $mysql->query($sql);

            if(!$results) {
                echo "SQL problem: " .
                    $mysql->error ;
                exit();
            }

            while($currentrow = $results->fetch_assoc()) {
                echo "<option>" . $currentrow['internet'] . "</option>";
            }
            ?>
        </select>
        <br><br>
        Outlets:
        <select name="outlet" class="textbox">
            <option value="ALL">Any Outlet Availability</option>
            <?php

            $sql = "SELECT * FROM outlet_availability";

            $results = $mysql->query($sql);

            if(!$results) {
                echo "SQL problem: " .
                    $mysql->error ;
                exit();
            }

            while($currentrow = $results->fetch_assoc()) {
                echo "<option>" . $currentrow['outlet'] . "</option>";
            }
            ?>
        </select>
        <br><br>
        Rewards:
        <select name="rewards" class="textbox">
            <option value="ALL">Any Rewards</option>
            <?php

            $sql = "SELECT * FROM rewards";

            $results = $mysql->query($sql);

            if(!$results) {
                echo "SQL problem: " .
                    $mysql->error ;
                exit();
            }

            while($currentrow = $results->fetch_assoc()) {
                echo "<option>" . $currentrow['rewardprogram'] . "</option>";
            }
            ?>
        </select>
        <br>
        <input type="submit" id="submit">
    </div>

</form>


<div id="aboutus">

    <h2>MORE ABOUT US:</h2>
    <div class="button">contact us</div>
</div>
<div id="getstarted">

    <h2>GET STARTED:</h2>
    <div class="button">sign up</div>
</div>
</body>
</html>
