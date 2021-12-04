<?php
//check to see what info was passed to this page
//var_dump($_REQUEST);

//actual update happens
//connect to db
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

//mysql_query("
// UPDATE cafelist
//SET likes = likes + 1
// WHERE user_id = '".$userid."'
//");

$sql = "UPDATE cafelist SET likes = likes + 1 WHERE cafe_id = " . $_REQUEST['id'] . ";";

//echo "<hr>" . $sql . "<hr>";

$results = $mysql->query($sql);
if(!results){
    echo "could not save changes";
    exit();
}

echo "You liked a cafe!";
?>

<a href="cgresults.php">Back to search results</a>
