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
            background-color: #33319F;
            color: #FDFAF1;
            font-size: 16pt;
            font-family: 'Montserrat', sans-serif;
            padding: 80px;
        }

        /*start of my style */

        #main-menu{
            text-align: center;
        }
        .boxes{
            background-color: #DD5F76;
            color:#FDFAF1;
            border-radius: 40px;
            width: 40%;
            padding-left: 2.5%;
            padding-right: 2.5%;
            text-align: center;
            margin-left: 2.5%;
            margin-right:2.5%;
            margin-bottom: 40px;
            float: left;
            padding-bottom: 40px;
        }
        img{
            width: 20px;
            margin-right: 6px;
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.typekit.net/aod6lef.css">
    <link rel="stylesheet" href="https://use.typekit.net/aod6lef.css">
</head>
<body>
<?php

if(empty($_REQUEST["outlet"])) {
    echo "Please enter an outlet availability option";
    exit();
}
//print_r($_REQUEST);

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

$sql = "INSERT INTO outlet_availability " .
    " (outlet)" .
    " VALUES " .
    "('" . $_REQUEST["outlet"] . "')";


$results = $mysql->query($sql);

if(!$results){
    echo "ERROR --  new outlet availability did not save <br>";
    echo $mysql->error;
} else {
    echo "Saved your new outlet availability option, <b style='color:#DD5F76;' >" . $_REQUEST["outlet"] . "</b> with an ID of " . $mysql->insert_id . ".";
}
?>
</body>
</html>
