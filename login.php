<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="commgr-stylesheet.css">
    <title>Common Grounds - Log In</title>
    <style>
        #login{
            width: 48%;
            height: 40%;
            position: absolute;
            left: 25%;
            top: 25%;
            padding: 2%;
            float: left;
            border: #33319F 2px solid;
            text-align: center;
            border-radius: 50px;
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
            color: white;
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
        <span style="font-size: medium"><em>Don't have an account?</em></span>
        <br><br><br>
        <input type="submit" class="button">
    </form>
</div>

</body>
</html>
