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
<?php
// Initialize the session
session_start();

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
            width: auto;
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
            width: 46%;
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
            width: 46%;
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
        #nav{
            background-color: #DD5F76;
            color: white;
            height: 50px;
            padding: 20px;
        }
    </style>
</head>

<body>
<div id="nav">
    <div id="logo"><a href="welcome.php"> <img src="logo.png" id="logo"></a></div>
    <?php
    if(!empty($_SESSION["username"])){
        echo "<div id='logout'> <a href='logout.php'> log out</a></div>";
    }
    ?>
    <div id="login">
        <?php
        if(empty($_SESSION["username"])){
            echo "<a href='login2.php'><span style='color: #DD5F76'>log in</span></a>";
        }
        else{?>
        Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b> <?php }?>
    </div>
</div>
<br><br><br>
<?php
include("auth.php");
?>
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
    Common Grounds is a user-based service that takes both your input and our own research to recommend cafes and restaurants suitable for you to do work. We strive to introduce our users new, fun cafes and restaurants near them.

    <br><br>What to learn more? Contact us below.
    <br><br>
    <div class="button"><a href="why-us.php"><span style='color: white'>contact us</span></a></div>
</div>
<div id="getstarted">

    <h2>GET STARTED:</h2>
    Excited by our service? Signing up is easy and quick. Before you know it you will be exploring all the cafes near you!

    <br><br>Click below to sign up and get started using our services.
    <br><br>
    <div class="button"><a href="register.php"><span style='color: white'>sign up</span></a></div>
</div>
</body>
</html>