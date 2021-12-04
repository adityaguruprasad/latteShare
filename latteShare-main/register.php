<?php include('functions.php') ?>

<!DOCTYPE html>
<html>
<head>
    <title>Common Grounds Registration</title>
    <link rel="stylesheet" href="style.css">

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
        img{
            width: 30%;
            display: block;
            margin-bottom: 10px;

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
    <div class="menu-item"><a href='topcafes.php'>Top Cafes </a> </div>

</div>
<div class="header">
    <h2>Register</h2>
</div>
<form method="post" action="register.php">
    <?php echo display_error(); ?>
    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_1">
    </div>
    <div class="input-group">
        <label>Confirm password</label>
        <input type="password" name="password_2">
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="register_btn">Register</button>
    </div>
    <p>
        Already a member? <a href="login2.php" style="color: #DD5F76;">Sign in</a>
    </p>
</form>
</body>
</html>


<?php
