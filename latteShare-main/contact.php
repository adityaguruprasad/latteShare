
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
        <title>Common Grounds search results</title>
        <style>
            a:visited{
                color: white;
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
                padding-top: 12px;
                line-height: 2%;
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
            .textbox{
                border: #33319F 1.5px solid;
                height: 40px;
                border-radius: 50px;
                color: #33319F;
                padding: 2%;
            }
            .button{
                border-radius: 50px;
                height: 2%;
                width: 8%;
                margin: auto;
                padding-top: 20px;
                background-color: #33319F;
                font-size: medium;
                line-height: 3%;

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
                font-family: 'Montserrat', sans-serif;
                color: white;
            }
            #nav{
                background-color: #33319F;
                color: white;
                height: 50px;
                padding: 20px;
            }
        </style>
    </head>
<body>
<div id="nav">
    <div id="logo"><img src="logo.png" id="logo"></div>
    <?php
    if(!empty($_SESSION["username"])){
        echo "<div id='logout'> <a href='logout.php'> log out</a></div>";
    }
    ?>
    <div id="login">
        <?php
        if(empty($_SESSION["username"])){
            echo "<a href='login2.php'><span style='color: #33319F'>log in</span></a>";
        }
        else{?>
            Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b> <?php }?>
    </div>
</div>
<?php
include("auth.php");
?>

<div class="container">
    <form action="action_page.php">

        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="First Name">

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Last Name">

        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Please write your message here." style="height:200px"></textarea>

        <input type="submit" value="Submit">

    </form>
</div>
