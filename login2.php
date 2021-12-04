<?php
include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Common Grounds</title>
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



</div>
	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login2.php">

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php" style="color: #DD5F76;">Sign up</a>
		</p>
	</form>
</body>
</html>