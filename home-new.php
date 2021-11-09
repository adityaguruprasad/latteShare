<html>
<head>

    <link rel="stylesheet" href="commgr-stylesheet.css">
    <title>Common Grounds - Home</title>

    <style>
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

        #findzone{
            background-color: #3D9E41;
            color: #FDFAF1;
            text-align: center;
            line-height: 2;
            padding: 10px;
            margin-top: 300px;
            width: 100%;
            height: 600px;
        }
        form{
            text-align: left;
            margin-left: 40%;
        }
        #login{
            width: 80px;
            height: 18px;
            padding: 10px;
            background-color: white;
            border-radius: 60px;
            color: #DD5F76;
            font-size: 14pt;
            position: absolute;
            right: 30px;
            top: 25px;
            text-align: center;
            font-family: 'Lekton', sans-serif;
        }

        #signup{
            width: 80px;
            height: 18px;
            padding: 10px;
            border: 2px solid white;
            border-radius: 60px;
            color: white;
            font-size: 14pt;
            position: absolute;
            right: 150px;
            top: 25px;
            text-align: center;
            font-family: 'Lekton', sans-serif;
        }

        h1{
            text-align: center;
            margin-top: 150px;

        }
        #description{
            width: 30%;
            position: absolute;
            top: 320px;
            margin-left: 35%;
            line-height: 1.3;
            text-align: center;
        }
        input[type=submit]{
            background-color: #FDFAF1;
            font-family: 'Lekton', sans-serif;
            color: #DD5F76;
            width: 70px;
            height: 40px;
            border-radius: 60px;
            border: #FDFAF1 1px solid;
            margin-top: 50px;
            font-size: 14pt;
        }

        #title{
            display: block;
            width: 50%;
            margin: auto;
        }
        #title-box{
            display: block;
            width: 100%;
            margin: auto;
        }

    </style>



</head>

<body>
<div id="nav">
    <div id="logo"><img src="logo.png" id="logo"></div>
    <div id="login">log in</div>
    <div id="signup">sign up</div>
</div>
<br><br><br><br><br>
<div id="title-box"><img src="cg-title.png" id="title"></div>

<div id="description">
    <p><span style="color: #DD5F76">Common Grounds</span> takes the work out of finding the perfect workspace for your workflow. Based on user experiences,
        we compile cafes and restaurants near you suitable to house your next endeavor.</p><p>Scroll down to start searching for the optimal grounds, so you can get those productive juices flowing.</p></div>
<br><br><br><br><br><br>
<div id="findzone">

    <h3>Find your zone!</h3>

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



    ?>

    <div id="container">

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



        <!--
        <form>
            Location:<input type="text" name="location"><br>
            Order Ahead: <input type="checkbox" id="order" name="yes" value="yes"><br>
            Outlets: <input type="checkbox" id="outlets" name="yes" value="yes"><br>
            Wifi: <input type="checkbox" id="wifi" name="yes" value="yes"><br>
            Seating:
            <select name="seating">
                <option value="1">1 available</option>
                <option value="1">2 available</option>
                <option value="1">4 available</option>
                <option value="1">6 available</option>
                <option value="1">more than 6 available</option>
            </select><br>
            Rewards: <input type="checkbox" id="rewards" name="yes" value="yes"><br>
            <input type="submit" value="go!">
        </form> -->

    </div>
</body>
</html>
