<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'webdev.iyaclasses.com');
define('DB_USERNAME', 'agurupra');
define('DB_PASSWORD', 'Acad275_Guruprasad_9353588244');
define('DB_NAME', 'agurupra_commonGrounds');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>