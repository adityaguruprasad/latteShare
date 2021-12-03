<html>
<head>
    <style>
        #nav{
            background-color: #DD5F76;
            color: white;
            height: 50px;
            padding: 20px;
        }

        #logo{
            height: 50px;
            width: 50px;
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
        img{
            width: 20px;
            margin-right: 6px;
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
<div id="main-menu">
    <h1>Admin Main Menu</h1>
</div>


<div class="boxes">
    <h3>Cafe Name</h3>
    <img src="add.png" alt="add"><a href="add-name.php" target="_blank">Add</a><br>
    <img src="edit.png" alt="edit">Edit<br>
    <img src="trash.png" alt="delete">Delete
</div>
<div class="boxes">
    <h3>Location</h3>
    <img src="add.png" alt="add">Add<br>
    <img src="edit.png" alt="edit">Edit<br>
    <img src="trash.png" alt="delete">Delete
</div>
<div class="boxes">
    <h3>Outlet Availability</h3>
    <img src="add.png" alt="add">Add<br>
    <img src="edit.png" alt="edit">Edit<br>
    <img src="trash.png" alt="delete">Delete
</div>
<div class="boxes">
    <h3>Internet Availability</h3>
    <img src="add.png" alt="add">Add<br>
    <img src="edit.png" alt="edit">Edit<br>
    <img src="trash.png" alt="delete">Delete
</div>
<div class="boxes">
    <h3>Seating Type</h3>
    <img src="add.png" alt="add">Add<br>
    <img src="edit.png" alt="edit">Edit<br>
    <img src="trash.png" alt="delete">Delete
</div>
<div class="boxes">
    <h3>Order Ahead</h3>
    <img src="add.png" alt="add">Add<br>
    <img src="edit.png" alt="edit">Edit<br>
    <img src="trash.png" alt="delete">Delete
</div>




</body>

</html>

