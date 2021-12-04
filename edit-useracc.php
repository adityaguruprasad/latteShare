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


<html>
<head>

    <link rel="stylesheet" href="../commgr-stylesheet.css">
    <title>Common Grounds - Account</title>

    <style>
        p{
            text-align: center;
            padding-left: 10%;
            padding-right: 10%;
        }
        a{
            color: white;
        }
        a:visited{
            clear: both;
        }
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
        h1{
            text-align: center;
            margin-top: 50px;

        }
        #description{
            width: 70%;
            position: absolute;
            top: 300px;
            margin-left: 15%;
            line-height: 1.2;
            text-align: center;
            font-size: x-large;
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
            width: 48%;
            height: 40%;
            position: absolute;
            left: 0%;
            top: 100%;
            padding: 2%;
            float: left;
            color: white;
            background-color: #3D9E41;
            text-align: center;
        }

        #getstarted{
            width: 48%;
            height: 40%;
            position: absolute;
            left: 50%;
            top: 100%;
            padding: 2%;
            border-top: #33319F;
            float: left;
            background-color: #DD5F76;
            color: white;
            text-align: center;
        }
        .textbox{
            border: #33319F 1.5px solid;
            height: 40px;
            border-radius: 50px;
            color: #33319F;
            padding: 2%;
            width: 50%;
            margin-left: 25%;
        }
        #button{
            border-radius: 50px;
            height: 30px;
            width: 100px;
            padding-top: 5px;
            text-align: center;
            color: white;
            background-color: #33319F;
            font-size: medium;
            margin-top: 20px;
        }

        .aboutbutton{
            border-radius: 50px;
            height: 10%;
            width: 24%;
            padding-top: 16px;
            background-color: #33319F;
            font-size: medium;
            margin-top: 0%;
            margin-bottom:%;
            margin-left: 10%;

        }

        .container{
            padding-left: 5%;
            float: left;
            width: 40%;
        }
        #submit{
            border-radius: 50px;
            height: 8%;
            width: 24%;
            background-color: #33319F;
            font-size: medium;
            color: white;
            margin-right: 10px;
            float: left;
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
        #logo{
            height: 50px;
            width: 50px;
            float: left;
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
            <a href="useracc.php" style="color:#DD5F76">Hi, <b><?php echo htmlspecialchars($_SESSION['user']['username']);

                    ?></b> </a> <?php }

        ?>
    </div>
</div>
<?php
include("auth.php");

$sql = "SELECT * FROM users4 WHERE username = '".$_SESSION['user']['username']."'";
$results = $mysql->query($sql);
while($currentrow = mysqli_fetch_array($results)) {
    $accid = $currentrow['id'];
}
?>
<h1>Edit account details</h1>
<form action="update-useracc.php">
    <input type="hidden" name="userid" value="<?php echo $accid ?>">
    <?php $user = $_SESSION['user']['username']; $email = $_SESSION['user']['email'] ?>
    <h3>Username: </h3>
    <input type="text" class="textbox" name="new_username" value="<?php echo $user?>">
    <h3>Email: </h3>
    <input type="text" class="textbox" name="new_email" value="<?php echo $email?>">
    <input type="submit" id="button" value="Update">
</form>
</body>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PF0NKREBNT"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-PF0NKREBNT');
</script>
</html>