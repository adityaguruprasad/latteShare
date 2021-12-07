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

// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page

?>
<?php
$sql = "SELECT * FROM users4 WHERE username = '".$_SESSION['user']['username']."'";
$results = $mysql->query($sql);
while($currentrow = mysqli_fetch_array($results)) {
    $accsecurity = $currentrow['user_type'];
}
if($accsecurity != 'admin'){
    echo "You don't have access to the admin page.";
    exit();
}


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
<?php
$sql = "SELECT * FROM users4 WHERE username = '".$_SESSION['user']['username']."'";
$results = $mysql->query($sql);
while($currentrow = mysqli_fetch_array($results)) {
    $accsecurity = $currentrow['user_type'];
}
if($accsecurity != 'admin'){
    echo "You don't have access to the admin page.";
    exit();
}
?>

<html>
<head>
    <style>
        #nav{
            background-color: #3D9E41;
            color: white;
            height: 50px;
            padding: 20px;
        }

        #logo{
            height: 50px;
            width: 50px;
            float: left;
            display: block;
        }

        h1{
            font-family: obviously, sans-serif;
            font-weight: 700;
            font-style: normal;
            font-size: 50pt;
            color: #33319F;
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
        }

        /*start of my style */

        #main-menu{
            text-align: center;
        }
        .boxes{
            background-color: #DD5F76;
            color:#FDFAF1;
            border-radius: 40px;
            width: 40%;
            padding-left: 2.5%;
            padding-right: 2.5%;
            text-align: center;
            margin-left: 2.5%;
            margin-right:2.5%;
            margin-bottom: 40px;
            float: left;
            padding-bottom: 40px;
        }
        #logo{
            height: 50px;
            width: 50px;
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
        img{
            width: 20px;
            margin-right: 6px;
        }

        a{
            color:#FDFAF1;
            text-decoration: none;
        }

        a:hover{
            color: #33319F;
        }
        .menu-item{
            padding-top: 15px;
            font-size: 12pt;
            margin-left: 15px;
            margin-right: 15pt;
            float: left;
            display: block;
        }

.button{
    border-radius: 50px;
    height: 40px;
    width: 100px;
    margin: auto;
    padding-top: 16px;
    background-color: #33319F;
    font-size: 12pt;
    float: right;
    display: block;
    text-align: center;
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.typekit.net/aod6lef.css">
    <link rel="stylesheet" href="https://use.typekit.net/aod6lef.css">
</head>

<body>

<?php
//
    if(empty($_REQUEST["id"])){
        //echo "Please go through <a href='search.php'>search page</a>";
        //exit();
    }
?>
<div id="nav">
    <div id="logo"><img src="logo.png" id="logo"></div>

    <div class="menu-item"><a href="admin-name.php" target="_blank">Cafe name</a></div>
    <div class="menu-item"><a href="admin-location.php" target="_blank">Location</a></div>
    <div class="menu-item"><a href="admin-outlet.php" target="_blank">Outlet Availability</a></div>
    <div class="menu-item"><a href="admin-internet.php" target="_blank">Internet Availability</a></div>
    <div class="menu-item"><a href="admin-seating.php" target="_blank">Seating Type</a></div>
    <div class="menu-item"><a href="admin-order.php" target="_blank">Order Ahead</a></div>

    <div class="button"><a href="login.php">login </a></div>

<div id="main-menu"><br>
    <h1>Admin Main Menu</h1>
    <h2><a href="../analytics.html"><span style="color: #33319F"> View Google Analytics</span></a></h2>
</div>

<div class="boxes">
    <h3>Cafe Name</h3>
    <img src="add.png" alt="add"><a href="add-name.php" target="_blank">Add</a><br>
    <img src="edit.png" alt="edit"><a href="edit-name.php" target="_blank">Edit</a><br>
    <img src="trash.png" alt="delete"><a href="delete-name.php" target="_blank">Delete</a><br>
</div>
<div class="boxes">
    <h3>Location</h3>
    <img src="add.png" alt="add"><a href="add-location.php" target="_blank">Add</a><br>
    <img src="edit.png" alt="edit"><a href="edit-location.php" target="_blank">Edit</a><br>
    <img src="trash.png" alt="delete"><a href="delete-location.php" target="_blank">Delete</a><br>
</div>
<div class="boxes">
    <h3>Outlet Availability</h3>
    <img src="add.png" alt="add"><a href="add-outlet.php" target="_blank">Add</a><br>
    <img src="edit.png" alt="edit"><a href="edit-outlet.php" target="_blank">Edit</a><br>
    <img src="trash.png" alt="delete"><a href="delete-outlet.php" target="_blank">Delete</a><br>
</div>
<div class="boxes">
    <h3>Internet Availability</h3>
    <img src="add.png" alt="add"><a href="add-internet.php" target="_blank">Add</a><br>
    <img src="edit.png" alt="edit"><a href="edit-internet.php" target="_blank">Edit</a><br>
    <img src="trash.png" alt="delete"><a href="delete-internet.php" target="_blank">Delete</a><br>
</div>
<div class="boxes">
    <h3>Seating Type</h3>
    <img src="add.png" alt="add"><a href="add-seating.php" target="_blank">Add</a><br>
    <img src="edit.png" alt="edit"><a href="edit-seating.php" target="_blank">Edit</a><br>
    <img src="trash.png" alt="delete"><a href="delete-seating.php" target="_blank">Delete</a><br>
</div>
<div class="boxes">
    <h3>Rewards</h3>
    <img src="add.png" alt="add"><a href="add-rewards.php" target="_blank">Add</a><br>
    <img src="edit.png" alt="edit"><a href="edit-rewards.php" target="_blank">Edit</a><br>
    <img src="trash.png" alt="delete"><a href="delete-rewards.php" target="_blank">Delete</a><br>
</div>




</body>

</html>
