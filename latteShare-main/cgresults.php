<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page

?>
<?php

if(empty($_REQUEST['location'])) {
    echo "Please go through search page. (or redirect)";
    exit();
}


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
        .like{
            float: left;
            margin-top: -3px;
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
    <div id="logo"><img src="logo.png" id="logo"></div>
    <?php
    if(!empty($_SESSION['user']['username'])){
        echo "<div id='logout'> <a href='logout.php'> log out</a></div>";
    }
    ?>
    <div id="login">
        <?php
        if(empty($_SESSION['user']['username'])){
            echo "<a href='login.php'><span style='color: #33319F'>log in</span></a>";
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

        echo   "<div class='title'> <strong> " . $counter . ")" . $currentrow['cafename'] . "<br>"
            . "</strong>  <a>" . $currentrow['outlet'] . " outlets".
            " | ". $currentrow['seatingtype'] ." seating | </a> </div>" .
            "<form action='like-cafe.php' class='like'><input type='hidden' name='id' value='" . $currentrow['cafe_id'] . "'><input type='submit' value='like' name='like'></form>" .

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
    ?>

</div>

</body></html>