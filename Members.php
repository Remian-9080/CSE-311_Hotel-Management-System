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
            font-family: Century gothic;
            

        }
        .bigbox{
            margin-top: 40px;
            margin-left: 100px;
        }
        .box1{
            border: 1px solid black;
            width: 40%;
            height: 150px;
            display: inline-block;
            padding:10px;
        }
        .box2{
            border: 1px solid black;
            width: 40%;
            height: 150px;
            display: inline-block;
            padding:10px;

        }
        .box1, .box2{
            
            margin: 10px;
        }
        
        img{
            width: 150px;
            float: left;
            margin-left: 10px;
            margin-top: 10px;
            border-radius: 50%;
            height: 140px;

        }
        h{
            margin-top: 30px;
            margin-left: 5px;
        }
        .team{
            font-size: 50px;
            margin-top:50px;
            margin-left: 100px;
        }
        input{
            margin-left: 110px;
        }
    </style>
</head>
<body>
    <div class="team">
        Team Members
    </div>
    <div class="bigbox">
    <div class="box1">
        <img src="saifur.jpg" alt=""> 
        <h></h> <br>
        <h>Name: Saifur Rahman Rubayet</h> <br>
        <h>ID: 1921870042 </h> <br>
        <h>Phone: 01679599850 </h> <br>
        <h>Email: saifur.rubayet@northsouth.edu </h>


    </div>

    <div class="box1">
        <img src="rakib.jpg" alt="">
        <h></h> <br>
        <h>Name: Mohammed Rakibul Hasan</h> <br>
        <h>ID: 1921798642 </h> <br>
        <h>Phone: 01620680352 </h> <br>
        <h>Email: rakib.hasan@northsouth.edu </h>


    </div>
    

    <div class="box2">
        <img src="tanha.jpg" alt="">
        <h></h> <br>
        <h>Name: Tanha Tasmi</h> <br>
        <h>ID: 1911302642 </h> <br>
        <h>Phone: 01674040230 </h> <br>
        <h>Email: tanha.chamak@northsouth.edu </h>


    </div>

    <div class="box2">
        <img src="jahangir.jpg" alt="">
        <h></h> <br>
        <h>Name: Jahangir Alam</h> <br>
        <h>ID: 1921863042 </h> <br>
        <h>Phone: 01777314884 </h> <br>
        <h>Email: jahangir.alam2@northsouth.edu </h>


    </div>
    </div>
    <div>
        <a href="home.php"><input type="submit" value="Back"></a>
    </div>
</body>
</html>