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
$userid = $_SESSION['user']['username'];

// Check if the user is logged in, if not then redirect him to login page

?>
<html>
<head>
    <style>
        .menu-item{
            padding-top: 15px;
            font-size: 12pt;
            margin-left: 15px;
            margin-right: 15pt;
            float: left;
            display: block;
            color: white;
        }
        img{
            width: 30%;
            display: block;
            margin-bottom: 10px;

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
            padding-bottom: 70px;
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
            font-family: obviously, sans-serif;
        }

        /*start of my style */

        #title{
            text-align: center;
            margin-top: 1%;
            margin-bottom: 60px;
            padding-left: 5%;
            padding-right: 5%;
        }
        img{
            width: 70%;
            display: block;
            margin: auto;

        }

        #more{
            text-align: center;
            margin-top: 50px;
            padding-left: 5%;
            padding-right: 5%;
        }

        #nav{
            background-color: #33319F;
            color: white;
            height: 50px;
            padding: 2%;
            width: 96%;
        }
        .menu-item{
            padding-top: 15px;
            font-size: 12pt;
            margin-left: 15px;
            margin-right: 15pt;
            float: left;
            display: block;
            color: white;
        }
        img{
            width: 30%;
            display: block;
            margin-bottom: 10px;

        }
        #nav{
            background-color: #33319F;
            color: white;
            height: 50px;
            padding: 20px;
        }

        #logo{
            height: 50px;
            width: 50px;
            float: left;
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
            padding-bottom: 70px;
        }

        #login{
            background-color: white;
            border-radius: 60px;
            color: #DD5F76;
            font-size: 14pt;
            position: absolute;
            right: 50px;
            top: 25px;
            text-align: center;
            font-family: obviously, sans-serif;
            height: 3%;
            width: 6%;
            margin: auto;
            padding-top: 20px;
            line-height: 3%;
        }
        #logout{

            border-radius: 60px;
            color: #DD5F76;
            font-size: 14pt;
            position: absolute;
            right: 200px;
            top: 25px;
            text-align: center;
            font-family: obviously, sans-serif;
            height: 3%;
            width: 6%;
            margin: auto;
            padding-top: 20px;
            line-height: 3%;
            border: white 1px solid;
        }

        /*start of my style */

        #title{
            text-align: center;
            margin-top: 50px;
            margin-bottom: 60px;
            padding-left: 5%;
            padding-right: 5%;
        }
        .menu-item{
            padding-top: 15px;
            font-size: 12pt;
            margin-left: 15px;
            margin-right: 15pt;
            float: left;
            display: block;
            color: white;
        }
        img{
            width: 30%;
            display: block;
            margin-bottom: 10px;

        }

        a:link {
            color: white;
        }
        a:hover {
            color: #DD5F76;
        }
        a {
            color: white;
        }
        #whatwedo {
            float: right;
            width: 35%;
            margin-top: -60px;
            margin-right: 10%;
            text-align: center;
        }
        #ourgoal {
            float: left;
            width: 35%;
            margin-top: px;
            margin-left: 10%;
            text-align: center;
        }
        .team {
            width: 100%;
        }
    </style>
</head>

<body>
<div id="nav">
    <div id="logo"><span style='float: left'><img src="logo.png" id="logo"></span></div>
    <div class="menu-item"><a href='../index.php'> Home </a> </div>
    <div class="menu-item"><a href='../about-us-cg%202/about.php'> About Us</a> </div>
    <div class="menu-item"><a href='../register.php'> Sign Up </a> </div>
    <div class="menu-item"><a href='why-us.php'> Why Us? </a> </div>
    <div class="menu-item"><a href='../daily-read-cg/daily-read.php'> Daily Read </a> </div>
    <?php
    if(!empty($_SESSION['user']['username'])){
        echo "<div id='logout'> <a href='logout.php'> log out</a></div>";
    }
    ?>
    <div id="login">
        <?php
        if(empty($_SESSION['user']['username'])){
            echo "<a href='../login2.php'><span style='color: #33319F'>log in</span></a>";
        }
        else{?>
            <a href="../useracc.php" style="color:#DD5F76"> <b><?php echo htmlspecialchars($_SESSION['user']['username']);

                    ?></b> </a> <?php }

        ?> </div>
</div>
<br><br><br>
<?php
include("auth.php");
?>
<div id="title">
<h1>Why us?</h1>
<h3>Our Mission</h3>
    Some may just want a cozy place to read a book while others want to be in a vibrant, working environment. LatteShare is a crowd-sourced database that crafts a list of suitable cafes near you. The app will originally start out by doing its own research to get a good base of cafes in the local area. Then as it grows, the users can add in their favorite places to work by rating across a variety of categories. The cafes will also be sorted based on their amenities. If they have outlets, inside and outdoor seating, WiFi, or rewards programs they will come up with one search but a quieter place with just WiFi will come up in another. This will help users narrow down what they are looking for in their experience.

</div>
<img src="Coffee-Shop.png" alt="coffee"><br><br>
<div id="more">
    We hope that you choose us every time you're looking for a place to study and get some work done. Thanks for visiting our page!
</div>

</body>
</html>
