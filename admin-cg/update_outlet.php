<html>
<head>
    <style>
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
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.typekit.net/aod6lef.css">
    <link rel="stylesheet" href="https://use.typekit.net/aod6lef.css">

</head>
<body>
<?php
//check to see what info was passed to this page
//var_dump($_REQUEST);

//actual update happens
//connect to db
$outlet = $_REQUEST["outlet"];

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


if($mysql->connect_errno) {
    echo "db connection error : " . $mysql->connect_error;
    exit();
}


$sql = "UPDATE outlet_availability SET outlet = '". $_REQUEST["outlet"] .
    "' WHERE outlet_id = " . $_REQUEST["id"] . ";";

//echo "<hr>" . $sql . "<hr>";

$results = $mysql->query($sql);
if(!results){
    echo "could not save changes";
    exit();
}

echo "Changes have been saved!";
?>

<a href="editing-latteShare.php">Back to main admin page</a>
</body>
</html>