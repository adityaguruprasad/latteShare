<?php
include('functions.php');

if (!isAdmin()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: login.php");
}
?>
<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>

        .header {
            background-color: #33319F;
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
        a:link {
            color: white;
        }
        a:hover {
            color: #DD5F76;
        }
        a {
            color: white;
        }
        img{
            width: 30%;
            display: block;
            margin-bottom: 10px;

        }
        .btn {
            background-color: #33319F;
        }
        #nav{
            background-color: #33319F;
            color: white;
            height: 50px;
            padding: 20px;
            width: 100%;
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


</div>
<div class="header">
    <h2>Admin - Home Page</h2>
</div>
<div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
            <h3>
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h3>
        </div>
    <?php endif ?>

    <!-- logged in user information -->
    <div class="profile_info">
        <img src="profilepic.png"  >

        <div>
            <?php  if (isset($_SESSION['user'])) : ?>
                <strong><?php echo $_SESSION['user']['username']; ?></strong>

                <small>
                    <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
                    <br>
                    <a href="index.php" style="color: #DD5F76;">Return to Home Page</a>
                    <br>

                    <a href="admin-cg/editing-latteShare.php" style="color: #DD5F76;">Admin Panel   </a>
                    &nbsp;<a href="create_user.php" style="color: #DD5F76;"> + add user</a><br>
                    <a href="home.php?logout='1'" style="color: #DD5F76;">Logout</a>

                </small>

            <?php endif ?>
        </div>
    </div>
</div>
</body>
</html>