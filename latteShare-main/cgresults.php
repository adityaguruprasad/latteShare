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
            margin-top: 50px;

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
            margin-top: 0px;
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

        .textbox{
            border: #33319F 1.5px solid;
            height: 40px;
            border-radius: 50px;
            color: #33319F;
            padding: 2%;
        }
        .button{
            border-radius: 50px;
            height: 5%;
            width: 14%;
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
        .like{
            float: left;
            margin-top: -45px;
            margin-left: 20px;
        }
        img {
            width: 2%;
        }

        @media only screen and (max-width: 350px ) {

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

<div id="container">
    <h1> Search results <br> <div class="button"><a href="search.php"><span style='color: white'>Search Again</span></a></div><hr></h1>

    <?php

    $sql = 		"SELECT * FROM cgView2 WHERE 1=1";

    if($_REQUEST['outlet'] != "ALL") {
        $sql .=		" AND outlet = '" . $_REQUEST["outlet"] . "'";
    }
    if($_REQUEST['seatingtype'] != "ALL") {
        $sql .=		" AND seatingtype = '" . $_REQUEST["seatingtype"] . "'";
    }
    if($_REQUEST['internet'] != "ALL") {
        $sql .=		" AND internet = '" . $_REQUEST["internet"] . "'";
    }
    if($_REQUEST['location'] != "ALL") {
        $sql .=		" AND location = '" . $_REQUEST["location"] . "'";
    }
    if($_REQUEST['rewardprogram'] != "ALL") {
        $sql .=		" AND rewardprogram = '" . $_REQUEST["rewardprogram"] . "'";
    }

    $results = $mysql->query($sql);
    if(!$results) {
        echo "<hr>Your SQL:<br> " . $sql . "<br><br>";
        echo "SQL Error: " . $mysql->error . "<hr>";
        exit();
    }

    echo "<em>Your results returned <strong>" .
        $results->num_rows .
        "</strong> results.</em>";
    echo "<br><br>";


    if(empty($_REQUEST["start"])) {
        $start=1;
    }
    else {
        $start = $_REQUEST["start"];
    }

    $end = $start + 4;

    if ($results->num_rows < $end) {
        $end = $results->num_rows;
    }

    $counter = $start;

    $results->data_seek($start-1);


    $searchstring = "&location=" . $_REQUEST["location"] .
        "&seatingtype=" . $_REQUEST["seatingtype"] .
        "&rating=" . $_REQUEST["rating"] .
        "&internet=" . $_REQUEST["internet"] .
        "&outlet=" . $_REQUEST["outlet"] .
        "&rewardprogram=" . $_REQUEST["rewardprogram"] ;

    //    echo "<hr>" . $searchstring . "<hr>";

    while($currentrow = $results->fetch_assoc()) {

        echo   "<div class='title'> <strong> " . $counter . ")" . $currentrow['cafename'] . "</strong>"
            . " | " . " Location: ". $currentrow['location'] .
            " | ". "Outlets: ". $currentrow['outlet'] .
            " | ".  "Rewards: ". $currentrow['rewardprogram'] .
            " | ".  "Wifi: ". $currentrow['internet'] .
            " | ".  "Seating: ". $currentrow['seatingtype'] . "</div>"?>
        <img src="heart.png" alt="heart icon" id="heart" >
        <?php
        echo
            "<form action='like-cafe.php' class='like' ><input type='hidden' name='id' value='" . $currentrow['cafe_id'] . "'><input type='submit' value='like' name='like'  ></form>" .

            "<br style='clear:both;'>";
        if($counter==$end)
        { break; }
        $counter++;
    }


    if($start != 1) {
        echo "<a href='cgresults.php?start=" . ($start - 5) .
            $searchstring .
            "'>Previous Records</a> | ";
    }
    if($end < $results->num_rows) {
        echo "<a href='cgresults.php?start=" . ($start + 5) .
            $searchstring .
            "'>Next Records</a>";
    }
    echo "<br><br>";

    if(!empty($_SESSION['user']['username'])){
        $recentsql = "UPDATE users4 SET " .
            " location = '" . $_REQUEST["location"] . "' , " .
            " seatingtype = '" . $_REQUEST["seatingtype"] . "' , " .
            " internet = '" . $_REQUEST["internet"] . "' , " .
            " outlet = '" . $_REQUEST["outlet"] . "' , " .
            " rewardprogram = '" . $_REQUEST["rewardprogram"] . "' " .
            " WHERE username = '" . $_SESSION['user']['username']."'";

        $results = $mysql->query($recentsql);
        if(empty($_SESSION['user']['username'])){
            echo "<br>Empty.";
        }
        if(!$results){
            echo "<br>User error.";
            exit();
        }
    }
    ?>

</div>

</body></html>