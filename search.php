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
);

if($mysql->connect_errno) {
    echo "db connection error : " . $mysql->connect_error;
    exit();
}
?>
<?php
// Initialize the session
session_start();
$userid = $_SESSION['user']['username'];

// Check if the user is logged in, if not then redirect him to login page

?>


<html>
<head>

    <link rel="stylesheet" href="../1123%20login/commgr-stylesheet.css">
    <title>Common Grounds - Home</title>

    <style>
        a:visited{
            color: white;
        }
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
            background-color: white;
            border-radius: 60px;
            color: #DD5F76;
            font-size: 14pt;
            position: absolute;
            right: 30px;
            top: 25px;
            text-align: center;
            font-family: obviously, sans-serif;
            height: 3%;
            width: 6%;
            margin: auto;
            padding-top: 12px;
            line-height: 2%;
        }
        #logout{
            width: 80px;
            height: 18px;
            padding: 10px;
            border: white 1px solid;
            border-radius: 60px;
            color: white;
            font-size: 14pt;
            position: absolute;
            right: 200px;
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
            font-family: 'Montserrat', sans-serif;
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
            top: 250px;
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
            height: 10%;
            width: 24%;
            margin: auto;
            padding-top: 16px;
            background-color: #33319F;
            font-size: medium;
            text-align: center;
        }
        .button2{
            border-radius: 50px;
            border: #33319F 2px solid;
            height: 8%;
            width: 8%;
            margin: auto;
            padding: 1.2%;
            font-size: medium;
            text-align: center;
            line-height: 7%;
        }

        .adminbutton{
            border-radius: 50px;
            height: 20%;
            width: 14%;
            margin: auto;
            padding-top: 16px;
            background-color: white;
            color: #33319F;
            font-size: medium;
            text-align: center;
            line-height: 20%;
        }
        .aboutbutton{
            border-radius: 50px;
            height: 10%;
            width: 24%;
            padding-top: 16px;
            background-color: #33319F;
            font-size: medium;
            margin-top: 0%;
            margin-bottom:%;
            margin-left: 10%;

        }

        .container{
            float: left;
            width: 20%;
            margin-left: 30%;
            margin-bottom: 5%;
        }

        .container1{
            float: left;
            width: 25%;
            margin-left: 0%;
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
        #nav{
            background-color: #33319F;
            color: white;
            height: 50px;
            padding: 20px;
        }
        .menu-item{
            padding-top: 15px;
            font-size: 12pt;
            margin-left: 15px;
            margin-right: 15pt;
            float: left;
            display: block;
            color: white;
        }
        img{
            width: 30%;
            display: block;
            margin-bottom: 10px;

        }
        #footer {
            background-color: #33319F;
            color: white;
            height: 100px;
            padding: 20px;
            margin-top: 56%;
            text-align: center;
        }

        a:link {
            color: #33319F;
        }
        a:hover {
            color: #DD5F76;
        }
        a:visited {
            clear: both;
        }
        span {
            width: 10%;
        }
        #logo{
            height: 50px;
            width: 50px;
            float: left;
        }
        #logout{

            border-radius: 60px;
            color: #DD5F76;
            font-size: 14pt;
            position: absolute;
            right: 150px;
            top: 25px;
            text-align: center;
            font-family: obviously, sans-serif;
            height: 3%;
            width: 6%;
            margin: auto;
            padding-top: 0px;
            line-height: 3%;
            border: white 1px solid;
        }
        @media only screen and (max-width: 550px ) {

            #nav{
                padding-left: 0px;
                padding-right: 0px;
            }


            .menu-item{
                padding-top: 15px;
                font-size: 35px;
                margin-left: 15px;
                margin-right: 1px;
                float: left;
                display: block;
                color: white;
            }

            #logo {
                visibility: hidden;
                width: 2px;
            }

            #login {
                width: 25px;
            }

            #container {
                font-size: 160%;
            }

            #heart {
                width: 4%;
            }


        }

    </style>
</head>

<body>
<div id="nav">
    <div id="logo"><span style='float: left'><img src="logo.png" id="logo"></span></div>
    <div class="menu-item"><a href='index.php'> <span style='color:white'> Home </a> </span></div>
    <div class="menu-item"><a href='about-us-cg%202/about.php' > <span style='color:white'>About Us</a> </span></div>
    <div class="menu-item"><a href='register.php'> <span style='color:white'>Sign Up</a> </span></div>
    <div class="menu-item"><a href='why-us-cg/why-us.php'><span style='color:white'>Why Us?</a> </span> </div>
    <div class="menu-item"><a href='daily-read-cg/daily-read.php'> <span style='color:white'>Daily Read</a> </span> </div>


    <?php
    if(!empty($_SESSION['user']['username'])){
        echo "<div id='logout'> <br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><a  href='logout.php'> <span style='color:#DD5F76'>log out</span></a></div>";
    }
    ?>
    <div id="login">
        <?php
        if(empty($_SESSION['user']['username'])){
            echo "<a href='login2.php'><span style='color: #33319F'>log in</span></a>";
        }
        else{?>
            <a href="useracc.php" style="color:#DD5F76"><b><?php echo htmlspecialchars($_SESSION['user']["username"]); ?></b> </a><?php }?>
    </div>
</div>
<h2>Search</h2>
<form action="cgresults.php">
    <h3>What're you looking for?</h3>
    <div class="container">
        Location:
        <select name="location" class="textbox" id="location">
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
        <select name="seatingtype" class="textbox" id="seatingtype">
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
    </div>
    <div class="container1">
        WiFi:
        <select name="internet" class="textbox"  id="internet">
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
        <select name="outlet" class="textbox" id="outlet">
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
        <select name="rewardprogram" class="textbox" id="rewardprogram">
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
        <?php
        if(!empty($_SESSION['user']['username'])){
            ?>

        <a href="recentsearch.php" style="color:#33319F"> View Previous Search</a>
            <?php
        }
        ?>
    </div>

    <div style="width: 35%">
    <input type="submit" id="submit" style="margin-left: 125%" >
        </div>

</form>