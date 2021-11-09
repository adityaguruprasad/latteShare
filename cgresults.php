<?php

if(empty($_REQUEST['cafename'])) {
    echo "Please go through search page. (or redirect)";
    exit();
}

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

?>
<html>
<head>
    <title>Common Grounds search results</title>
    <style>
        body {
            background-color: lightcoral;
            margin: 0 200px;
            text-align: center;
        }

        #container {
            padding: 30px;
            margin-top: 100px;
            background-color: darkgrey;
            width: 650px;
            text-align: left;
        }

        }
        .title {
            width: 500px;
            float:left;
        }

    </style>
</head>
<body>
<div id="container">
    <h1> Search results<hr></h1>

    <?php

    $sql = 		"SELECT * FROM cgView WHERE 1=1";

    if($_REQUEST['cafename'] != "ALL") {
        $sql .= " AND cafename ='" . $_REQUEST["cafename"] . "'";
    }
    if($_REQUEST['outlet'] != "ALL") {
        $sql .=		" AND outlet = '" . $_REQUEST["outlet"] . "'";
    }
    if($_REQUEST['seatingtype'] != "ALL") {
        $sql .=		" AND seatingtype = '" . $_REQUEST["seatingtype"] . "'";
    }

    $results = $mysql->query($sql);

    if(!$results) {
        echo "<hr>Your SQL:<br> " . $sql . "<br><br>";
        echo "SQL Error: " . $mysql->error . "<hr>";
        exit();
    }

    echo "<em>Your results returned <strong>" .
        $results->num_rows .
        "</strong> results.</em>";
    echo "<br><br>";

    while($currentrow = $results->fetch_assoc()) {
        echo "<div class='title'> <strong> " . $currentrow['cafename'] . "|"
            . "</strong>  </a>" . $currentrow['outlet'] . " outlets".
           " | ". $currentrow['seatingtype'] ." seating | </a> </div>" .

            "<br style='clear:both;'>";

    }
    ?>

</div>

</body></html>