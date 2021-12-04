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

if($mysql->connect_errno){
    echo "DATABASE ERROR" . $mysql->connect_error;
    exit();
}

$sql = "SELECT * FROM cgView2 WHERE 1=1";

$results = $mysql->query($sql);

if(!$results){
    echo "SQL ERROR: <br>" . $mysql->error . "<br>" . $sql;
    exit(); }

$recorddata = $results->fetch_assoc();

?>
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
            background-color: #FDFAF1;
            color: #33319F;
            font-size: 16pt;
            font-family: 'Montserrat', sans-serif;
        }

        /*start of my style */

        #title{
            text-align: center;
            margin-top: 50px;
            margin-bottom: 60px;
        }
        #box{
            background-color:#33319F;
            color:#FDFAF1;
            border-radius: 40px;
            width: 60%;
            padding-top: 40px;
            padding-left: 2.5%;
            padding-right: 2.5%;
            text-align: center;
            margin-bottom: 40px;
            padding-bottom: 20px;
            margin: auto;
        }

        .textbox{
            border: #DD5F76 3px solid;
            height: 40px;
            border-radius: 50px;
            color: #33319F;
            padding: 10px;
        }

        .submitb{
            height: 40px;
            width: 70px;
            border-radius: 50px;
            background-color: #DD5F76;
            color: #FDFAF1;

        }


    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.typekit.net/aod6lef.css">
    <link rel="stylesheet" href="https://use.typekit.net/aod6lef.css">
</head>
<body>
<div id="title">
    <h3>Delete Outlet Availability</h3>
</div>
<div id="box">

    <form action="delete-page-outlet.php">
        <!--<input type="hidden" name="recordid" value="<?php// $currentrow = $results->fetch_assoc(); echo $recorddata['name_id'];?>">-->
        What outlet availability do you want to delete? <br><br>
        <select name="recordid" class="textbox">
            <option>Select outlet availability </option>
            <?php
            $sql = "SELECT * FROM outlet_availability";
            $results = $mysql->query($sql);
            if(!$results){
                echo "SQL ERROR: <br>" . $mysql->error . "<br>" . $sql;
                exit(); } else{
                echo "<br>db query successful";
            }

            while($currentrow = $results->fetch_assoc()){
                echo "<option value='". $currentrow['outlet_id'] . "'>" . $currentrow["outlet"] . "</option>";
            }

            ?>
        </select><br><br>

        <input type="submit" value="Delete" class="submitb" >
    </form>

</div>
</body>
</html>
