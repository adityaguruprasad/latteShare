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
            width: 130px;
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
<?php
$rewardprogram = $_REQUEST["rewardprogram"];

if($_REQUEST["confirm"] != "yes") {
    echo "<br><br>Please confirm you want to delete this rewards program option. <br><br>";
    ?>
    <form action="delete-page-rewards.php">
        <input type="hidden" name="recordid"
               value="<?php echo $_REQUEST['recordid'] ?>">
        <input type="hidden" name="confirm" value="yes">
        <input type="submit" value="Confirm Deletion" class="submitb">
    </form>

    <?php
    exit();
} // end of if statement
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

$sql = "DELETE FROM rewardprogram WHERE rewards_id=" .
    $_REQUEST["recordid"] . ";";

echo "<hr>SQL:<br>" . $sql;

$results = $mysql->query($sql);

if(!$results) {

    echo "PROBLEM. Did NOT delete the cafe name.";
    exit();
}

echo "Your outlet availability was deleted. ";
?>





</body>
</html>
