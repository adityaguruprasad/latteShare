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
            right: 30px;
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
            right: 150px;
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
    <div class="menu-item"><a href='about.php'> About Us</a> </div>
    <div class="menu-item"><a href='../register.php'> Sign Up </a> </div>
    <div class="menu-item"><a href='../why-us-cg/why-us.php'> Why Us? </a> </div>
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
<br>
<div id="title">
    <h1>About us</h1> </div>
<img src="coffeeshopwork.png" alt="people working in cafe" style="float: left; margin-left:14%"><br><br>
<div id="whatwedo"> <h3>What we do </h3>
    Common Grounds is a user-based service that takes both your input and our own research to recommend cafes and restaurants suitable for you to do work. Each person is looking for something different and we strive to find the right place for each person.
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div id="ourgoal">
    <h3>Our Goal</h3>
    We take the work out of finding the right workspace for you. With everything going on, there’s no need to stress about finding a place to work too. Whether you need to get out of the house or are looking for a new place to hang out, we got you!
</div>
<img src="coffeeshop.jpg" alt="coffee shop" style="float: right; margin-right:12%"><br><br>


<br><br> <br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h2 style="text-align: center; margin: auto">Our Team</h2>
<br> <br>
<div class="team"><img src="Group%204.png" alt="Team Photos" style="text-align: center; margin: auto; width: 80%"></div><br><br>
</body>
</html>
