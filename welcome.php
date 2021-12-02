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
            height: 10%;
            width: 24%;
            margin: auto;
            padding-top: 16px;
            background-color: #33319F;
            font-size: medium;

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
            margin: auto;

        }
    </style>
</head>

<body>
<div id="nav">
    <div id="logo"><span style='float: left'><img src="logo.png" id="logo"></span></div>
    <div class="menu-item"><a href='http://webdev.iyaclasses.com/~slfinnig/acad276/about-us-cg/about.php'> About Us</a> </div>
    <div class="menu-item"><a href='http://webdev.iyaclasses.com/~omitowoj/group/register.php'> Sign Up </a> </div>
    <div class="menu-item"><a href='http://webdev.iyaclasses.com/~slfinnig/acad276/why-us-cg/why-us.php'> Why Us? </a> </div>
    <div class="menu-item"><a href='http://webdev.iyaclasses.com/~slfinnig/acad276/daily-read-cg/daily-read.php'> Daily Read </a> </div>
    <div class="menu-item"><a href='http://webdev.iyaclasses.com/~omitowoj/group/topcafes.php'>Top Cafes </a> </div>

    <?php
    if(!empty($_SESSION["username"])){
        echo "<div id='logout'> <a href='logout.php'> log out</a></div>";
    }
    ?>
    <div id="login">
        <?php
        if(empty($_SESSION["username"])){
            echo "<a href='login.php'><span style='color: #33319F'>log in</span></a>";
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
        <br><br>
        Ratings:
        <select name="rating" class="textbox" id="rating">
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
        <input type="submit" id="submit">
    </div>

</form>


<div id="aboutus">

    <h2>MORE ABOUT US:</h2>
    Common Grounds is a user-based service that takes both your input and our own <br> research to recommend cafes and restaurants suitable for you to do work. We  <br> strive to introduce our users new, fun cafes and restaurants near them.

    <br><br>What to learn more? Contact us below.
    <br><br>
    <div class="button"><a href="http://webdev.iyaclasses.com/~slfinnig/acad276/about-us-cg/about.php"><span style='color: white'>Contact Us</span></a></div>
</div>
<div id="getstarted">

    <h2>GET STARTED:</h2>
    Excited by our service? Signing up is easy and quick. Before you know it you will be exploring all the cafes near you!

    <br><br>Click below to sign up and get started using our services.
    <br><br>
    <div class="button"><a href="register.php"><span style='color: white'>Sign Up</span></a></div>
    <br>
    Are you a coffee shop looking to be added to our database? Click below!
    <br><br>
    <div class="button"><a href="http://webdev.iyaclasses.com/~slfinnig/acad276/admin-cg/editing-latteShare.php
"><span style='color: white'>Admin </span></a></div>


</div>
</body>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PF0NKREBNT"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-PF0NKREBNT');
</script>
</html>