<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="commgr-stylesheet.css">
    <title>Common Grounds - Sign Up</title>
    <style>
        body{
            color: white;

        }
        #login{
            width: 48%;
            height: 40%;
            position: absolute;
            left: 0%;
            top: 25%;
            padding: 2%;
            float: left;
            background-color: #3D9E41;
            text-align: center;
        }

        #signup{
            width: 48%;
            height: 40%;
            position: absolute;
            left: 50%;
            top: 25%;
            padding: 2%;
            border-top: #33319F;
            float: left;
            background-color: #DD5F76;
            text-align: center;
        }

        .textbox{
            border: #33319F 1.5px solid;
            height: 30px;
            border-radius: 50px;
            color: #33319F;
            padding: 2%;
        }
        .button{
            border-radius: 50px;
            height: 30px;
            background-color: #33319F;
            font-size: medium;
        }
    </style>


</head>

<body>
<div id="nav">
    <img src="logo.png" id="logo">
</div>
<div id="login">
    <br><br>
    <h2>LOG IN</h2>
    <form>
        Username:
        <input type="text" name="username" class="textbox">
        <br><br>
        Password:
        <input type="password" name="password" required class="textbox">
        <br><br>
        <input type="submit" class="button">
    </form>
</div>
<div id="signup">
    <br><br>
    <h2>SIGN UP</h2>
    <form>
        Username:
        <input type="text" name="username" class="textbox">
        <br><br>
        Password:
        <input type="password" name="password" required class="textbox">
        <br><br>
        <input type="submit" class="button">
    </form>
</div>
</body>
</html>
