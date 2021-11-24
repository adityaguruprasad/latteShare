<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'webdev.iyaclasses.com');
define('DB_USERNAME', 'omitowoj');
define('DB_PASSWORD', 'Acad275_Omitowoju_2813341101');
define('DB_NAME', 'omitowoj_commongrounds');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>