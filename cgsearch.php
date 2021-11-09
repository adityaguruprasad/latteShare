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


if($mysql->connect_errno) {
    echo "db connection error : " . $mysql->connect_error;
    exit();
}
?>
<html>
<head>
    <title>Common Grounds Search Page</title>
</head>
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
        width: 400px;
        text-align: left;
    }

    .label {
        float:left;
        clear:both;
        width: 120px;
    }
</style>

<body>
<div id="container">

    <h1>Common Grounds Search</h1>
    <form action="cgresults.php">
        Cafe Name: <select name="cafename">
            <option value="ALL">Any Cafe</option>
            <?php

            $sql = "SELECT * FROM cafe_name";

            $results = $mysql->query($sql);

            if(!$results) {
                echo "SQL problem: " .
                    $mysql->error ;
                exit();
            }

            while($currentrow = $results->fetch_assoc()) {
                echo "<option>" . $currentrow['cafename'] . "</option>";
            }
            ?>
            <br>
            <br>
        </select><br>
            Outlet Availability: <select name="outlet">

                <option value="ALL">Any Outlet Availabilities</option>
                <?php

                $sql = "SELECT * FROM outlet_availability";

                $results = $mysql->query($sql);

                if(!$results) {
                    echo "SQL problem: " .
                        $mysql->error ;
                    exit();
                }

                while($currentrow = $results->fetch_assoc()) {
                    echo "<option>" . $currentrow['outlet'] . "</option>";
                }
                ?>
            </select><br>
            Seating Type: <select name="seatingtype">
                <option value="ALL">Any Seating Type</option>
                <?php

                $sql = "SELECT * FROM seating_type";

                $results = $mysql->query($sql);

                if(!$results) {
                    echo "SQL problem: " .
                        $mysql->error ;
                    exit();
                }

                while($currentrow = $results->fetch_assoc()) {
                    echo "<option>" . $currentrow['seatingtype'] . "</option>";
                }
                ?>

            </select><br>
            <br>

            <input type="submit">
    </form>
</body>
</html>