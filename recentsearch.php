<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page

?>
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
<html>
<head>
    <title>Common Grounds search results</title>
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
            height: 2%;
            width: 8%;
            margin: auto;
            padding-top: 20px;
            background-color: #33319F;
            font-size: medium;
            line-height: 3%;

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
    </style>
</head>
<body>
<div id="nav">
    <div id="logo"><img src="logo.png" id="logo"></div>
    <?php
    if(!empty($_SESSION['user']['username'])){
        echo "<div id='logout'> <a href='../../Downloads/test%202/logout.php'> log out</a></div>";
    }
    ?>
    <div id="login">
        <?php
        if(empty($_SESSION['user']['username'])){
            echo "<a href='../../Downloads/test%202/login.php'><span style='color: #33319F'>log in</span></a>";
        }
        else{?>
            Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b> <?php }?>
    </div>
</div>
<?php
include("auth.php");
?>

<div id="container">
    <h1> Search results <br> <div class="button"><a href="index.php"><span style='color: white'>Search Again</span></a></div><hr></h1>

    <?php
    $temp1 = "SELECT outlet FROM users4 WHERE username = '".$_SESSION['user']['username']."'";
    $outletSql = $mysql->query($temp1);
    while($currentrow = mysqli_fetch_array($outletSql)) {
        $outlet = $currentrow['outlet'];
    }
    $temp2 = "SELECT seatingtype FROM users4 WHERE username = '".$_SESSION['user']['username']."'";
    $seatingSql = $mysql->query($temp2);
    while($currentrow = mysqli_fetch_array($seatingSql)) {
        $seating = $currentrow['seatingtype'];
    }
    $temp = "SELECT internet FROM users4 WHERE username = '".$_SESSION['user']['username']."'";
    $internetSql = $mysql->query($temp);
    while($currentrow = mysqli_fetch_array($internetSql)) {
        $internet = $currentrow['internet'];
    }
    $temp = "SELECT location FROM users4 WHERE username = '".$_SESSION['user']['username']."'";
    $locationSql = $mysql->query($temp);
    while($currentrow = mysqli_fetch_array($locationSql)) {
        $location = $currentrow['location'];
    }
    $temp = "SELECT rewardprogram FROM users4 WHERE username = '".$_SESSION['user']['username']."'";
    $rewardSql = $mysql->query($temp);
    while($currentrow = mysqli_fetch_array($rewardSql)) {
        $reward = $currentrow['rewardprogram'];
    }

    $sql = "SELECT * FROM cgView2 WHERE 1=1";
    if($outlet != "ALL") {
        $sql .=		" AND outlet = '" . $outlet . "'";
    }
    if($seating != "ALL") {
        $sql .=		" AND seatingtype = '" . $seating . "'";
    }
    if($internet != "ALL") {
        $sql .=		" AND internet = '" . $internet . "'";
    }
    if($location != "ALL") {
        $sql .=		" AND location = '" . $location . "'";
    }
    if($reward != "ALL") {
        $sql .=		" AND rewardprogram = '" . $reward . "'";
    }
    echo "In your most recent search, you searched for ".$outlet." outlet types, ".$seating." seating types, ".$internet.
    " Internet availability, ".$location. " locations, and ".$reward." reward programs. Here are your results: <br><br>";
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
        echo   "<div class='title'> <strong> " . $counter . ")" . $currentrow['cafename'] . " |"
            . "</strong>  <a>" . $currentrow['outlet'] . " outlets".
            " | ". $currentrow['seatingtype'] ." seating | </a> </div>" .

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


    ?>

</div>

</body></html>