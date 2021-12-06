<?php
$seatingtype = $_REQUEST["seatingtype"];


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

// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page

?>
<?php
$sql = "SELECT * FROM users4 WHERE username = '".$_SESSION['user']['username']."'";
$results = $mysql->query($sql);
while($currentrow = mysqli_fetch_array($results)) {
    $accsecurity = $currentrow['user_type'];
}
if($accsecurity != 'admin'){
    echo "You don't have access to the admin page.";
    exit();
}


if($mysql->connect_errno){
    echo "DATABASE ERROR" . $mysql->connect_error;
    exit();
}

$sql = "SELECT * FROM cgView2 WHERE seatingtype_id=" . $_REQUEST['id'];


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
            background-color: #DD5F76;
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
            border: #33319F 3px solid;
            height: 40px;
            border-radius: 50px;
            color: #33319F;
            padding: 10px;
        }
        .submitb{
            height: 40px;
            width: 70px;
            border-radius: 50px;
            background-color: #33319F;
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
    <h3>Edit Seating Type</h3>
</div>
<div id="box">
    Edit seating type:<br><br>
    <form action="update_seating.php">
        <input type="hidden" name="id" value="<?php echo $recorddata['seatingtype_id'];?>">
        <input type="text" name="seatingtype" class="textbox" value=" <?php echo $recorddata['seatingtype'];?>">
        <br><br>
        <input type="submit" value="Submit" class="submitb" >
    </form>


    </form>

</div>
</body>
</html>