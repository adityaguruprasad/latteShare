<?php
//check to see what info was passed to this page
//var_dump($_REQUEST);

//actual update happens
//connect to db
$rewardprogram = $_REQUEST["rewardprogram"];

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


$sql = "UPDATE rewards SET rewardprogram = '". $_REQUEST["rewardprogram"] .
    "' WHERE rewards_id = " . $_REQUEST["id"] . ";";

//echo "<hr>" . $sql . "<hr>";

$results = $mysql->query($sql);
if(!results){
    echo "could not save changes";
    exit();
}

echo "Changes have been saved!";
?>

<a href="editing-latteShare.php">Back to main admin page</a>
