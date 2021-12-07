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

    <link rel="stylesheet" href="commgr-stylesheet.css">
    <title>Common Grounds - Home</title>

    <style>
        h3{
            text-align: center;
        }
        h2{
            font-family: obviously, sans-serif;
            font-weight: 700;
            font-style: normal;
            font-size: 30pt;
        }

        body{
            background-color: #FDFAF1;
            color: #33319F;
            font-size: 16pt;
            font-family: 'Montserrat', sans-serif;
        }
        form{
            text-align: left;
            margin-left: 40%;
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
            width: 80px;
            height: 18px;
            padding: 10px;
            border: white 1px solid;
            border-radius: 60px;
            color: white;
            font-size: 14pt;
            position: absolute;
            right: 200px;
            top: 25px;
            text-align: center;
            font-family: obviously, sans-serif;
        }
        h1{
            text-align: center;
            margin-top: 150px;

        }
        #description{
            width: 70%;
            position: absolute;
            top: 300px;
            margin-left: 15%;
            line-height: 1.2;
            text-align: center;
            font-size: x-large;
            color: #33319F;
        }
        input[type=submit]{
            background-color: #FDFAF1;
            font-family: 'Montserrat', sans-serif;
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
        #aboutus{
            width: 50%;
            height: 40%;
            position: absolute;
            left: 0%;
            top: 80%;
            margin: 0px;
            padding: 0px;
            float: left;
            color: white;
            background-color: #3D9E41;
            text-align: center;
        }

        #getstarted{
            width: 50%;
            height: 40%;
            position: absolute;
            left: 50%;
            margin: 0px;
            padding: 0px;
            top: 80%;
            border-top: #33319F;
            float: left;
            background-color: #DD5F76;
            color: white;
            text-align: center;
        }
        form{
            border-radius: 50px;
            border: #33319F 2px solid;
            width: 70%;
            height: 40%;
            position: absolute;
            top: 450px;
            margin-left: 15%;
            line-height: 1.1;
        }
        .button{
            border-radius: 50px;
            height: 10%;
            width: 24%;
            margin: auto;
            padding-top: 16px;
            background-color: #33319F;
            font-size: medium;

        }
        .button2{
            border-radius: 50px;
            border: #33319F 2px solid;
            height: 8%;
            width: 8%;
            margin: auto;
            padding: 1.2%;
            font-size: medium;
            text-align: center;
            line-height: 7%;
        }

        .adminbutton{
            border-radius: 50px;
            height: 35%;
            width: 8%;
            margin: auto;
            padding-top: 16px;
            background-color: white;
            color: #33319F;
            font-size: medium;
            text-align: center;
            line-height: 20%;
        }
        #nav{
            background-color: #33319F;
            color: white;
            height: 50px;
            padding: 20px;
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
        #footer {
            background-color: #33319F;
            color: white;
            width: 95.6%;
            height: 100%;
            padding: 4%;
            margin-top: 26%;
            margin-left: -2%;
            text-align: center;
        }
        a {
            color: white;
        }
        span {
            width: 10%;
        }
        #logo{
            height: 50px;
            width: 50px;
            float: left;
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
        @media only screen and (max-width: 550px ) {

            h1{
                font-size: 70pt;
            }
            #by{
                font-size: 20pt;
            }

            #nav{
                padding-left: 0px;
                padding-right: 0px;
                height: 20%;
            }

            .menu-item{
                padding-top: 15px;
                font-size: 35px;
                margin-left: 15px;
                margin-right: 1px;
                float: left;
                display: block;
                color: white;
            }

            #logo {
                visibility: hidden;
                width: 2px;
            }

            #login {
                width: 25px;
            }

            body{
                font-size: 40pt;
            }


        }
    </style>
</head>

<body>
<div id="nav">
    <div id="logo"><span style='float: left'><img src="logo.png" id="logo"></span></div>
    <div class="menu-item"><a href='index.php'> Home </a> </div>
    <div class="menu-item"><a href='about-us-cg%202/about.php'> About Us</a> </div>
    <div class="menu-item"><a href='register.php'> Sign Up </a> </div>
    <div class="menu-item"><a href='why-us-cg/why-us.php'> Why Us? </a> </div>
    <div class="menu-item"><a href='daily-read-cg/daily-read.php'> Daily Read </a> </div>
    <?php
    if(!empty($_SESSION['user']['username'])){
        echo "<div id='logout'> <a href='logout.php'> log out</a></div>";
    }
    ?>
    <div id="login">
        <?php
        if(empty($_SESSION['user']['username'])){
            echo "<a href='login2.php'><span style='color: #33319F'>log in</span></a>";
        }
        else{?>
            <a href="useracc.php" style="color:#DD5F76"> <b><?php echo htmlspecialchars($_SESSION['user']['username']);

                    ?></b> </a> <?php }

        ?> </div>

<br><br><br>
<?php
include("auth.php");
?>

    <br>
    <br>
    <br>
    <br>
<div id="title-box"><img src="https://raw.githubusercontent.com/adityaguruprasad/latteShare/main/cg-title.png" id="title"></div>

<div id="description">
    is a database service that helps our users find the best cafes around them for their workflow. Whether it be having enough
    sitting, WiFi, or just overall vibes of the space, Common Grounds caters to your needs to find the perfect space for you!

</div>

    <br>
    <br>
<br>
<br>
<br>
<br>

<div class="button2"><a href="search.php"><span style='color: #33319F'>Search</span></a></div>
<br>

<div id="aboutus">

    <h2>MORE ABOUT US:</h2>
    Common Grounds is a user-based service that takes both your input and our own <br> research to recommend cafes and restaurants suitable for you to do work. We  <br> strive to introduce our users new, fun cafes and restaurants near them.

    <br><br>What to learn more? Contact us below.
    <br><br>
    <div class="button"><a href="about-us-cg%202/about.php"><span style='color: white'>Contact Us</span></a></div>
</div>
<div id="getstarted">

    <h2>GET STARTED:</h2>
    Excited by our service? Signing up is easy and quick. <br> Before you know it you will be exploring all the cafes near you!

    <br><br>Click below to sign up and get started using our services.
    <br><br>
    <div class="button"><a href="register.php"><span style='color: white'>Sign Up</span></a></div>
</div>
    <div  id="footer">
        Are you a coffee shop looking to be added to our database? Click below!
        <br><br>
        <div class="adminbutton"><a href="create_user.php"><span style='color: #33319F'>Admin</span></a></div>
        </div>
</body>
</html>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PF0NKREBNT"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-PF0NKREBNT');
</script>
