<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
        margin: 0;
        padding: 0;
        font-family: Century gothic;
        box-sizing: border-box;
        
    }
    .main{
        background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
         url("image2.jpg");
        width:100%;
        height:100vh;
        background-size: 100% 100%;

    }
    ul{
        list-style-type: none;
        float: right;
        margin-top: 40px;
        /* margin-right: 20px ; */
    }
    ul li{
        display: inline-block;
    }
    ul li a{
        text-decoration: none;
        color: white;
        padding: 5px 20px;
        border: 1px solid;

    }
    ul li a:hover{
        background-color: white;
        color: black;
    }
    .title{
        color: white;
        margin-top: 0px;
        font-size: 20px;
        margin-left: 20px;
    }

    .promo{
        color: white;
        font-size: 50px;
        margin-top: 100px;
        margin-left: 20px;
        
    }
    
    .Reserve{
        float: left;
        margin-left: 20px;
        
    }
    .active{
        background-color: white;
        color: black;
    }
    .menu{
        font-size: 20px;

    }
    .userid{
        text-decoration: none;
        float: right;
        color: white;
        margin-right: 40px;
        font: 25px;
        font-weight: bold;
    }
    a{
        color: white;
        text-decoration: none;

    }
    .logout{
        margin-right: 10px;
        margin-top: 50px;
        color: red;
    }
   
    </style>
</head>
<body>
<div class="main">
        <div class="title">
            <h>Hotel Management System</h>

        </div>
        <div class="userid">
            <a href="User.php">
            <?php
                session_start();
                echo $_SESSION['$userID'] ;
            ?>
            </a>

        </div>
        <div class="menu">
        <ul>
            <li><a = href="#" class="active">Home </a></li>

        
            </li>
            <li><a = href="#"> Rooms </a></li>
            <!-- <li><a = href="#"> Services </a></li> -->
            <li><a = href="#">Gallery </a></li>
            <li><a = href="Members.php">Members </a></li>
            <li><a = href="#">About </a></li>

            <!-- <li><a = href="#">Contact </a></li> -->
        </ul>
        </div>
        <div class="promo">
            <h>Spend Quality</h><br>
            <h>Holidays with us</h>
    
        </div>
        <div class="Reserve">
            <ul>
                <div ><li><a href="Room_1.php" class="res">Reserve Now</a></li></div>
            </ul>
        </div>
        <div class="logout">
            <ul>
                <li><a href="login.php">Logout</a></li>
            </ul>
        </div>
    </div>
</body>
</html>