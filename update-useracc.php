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

// Check if the user is logged in, if not then redirect him to login page

?>

<?php

include("auth.php");
$sql = "UPDATE users4 SET "." username = '".
    $_REQUEST["new_username"]."' , "." email = '".
    $_REQUEST["new_email"] ."' WHERE id = '".$_REQUEST["userid"]."'";
$results = $mysql->query($sql);
if(!$results){
    echo "Oops! Something went wrong.";
    exit();
}
else{
    header("location: logout.php");
}
?>