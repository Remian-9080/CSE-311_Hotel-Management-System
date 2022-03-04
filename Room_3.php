<?php
$serverName= "localhost";
$username= "root";
$password= "";
$dbName= "projectn";
session_start();

//echo "thanks";

try{
    $conn= new PDO("mysql:host=$serverName;dbname=$dbName", $username, $password);
    $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected Succesfully";

}catch(PDOExpection $exc){
    echo "Connection Failed" .$exc->getmessage();
    exit();
}

if(isset($_POST['book'])){
  //header('location:Home.php');
  $room='room003';
  $_SESSION['$room']= $room;
  header('location:Book.php');
}
if(isset($_POST['next'])){
  header('location:room_1.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room-3</title>
    <style>
         


         header 
{
    height: 40px;
    background-color: rgb(14, 3, 41);
    color: whitesmoke;
    font-size: 18px;
    text-align: center;
    padding-top: auto;
    padding-bottom: auto;
}
nav
{
    height: 34px;
    background-color: whitesmoke;
    padding-left:600px;
    padding-top: auto;
    padding-bottom: auto;
    margin-top:-10px;
    text-align: center;
    font-size: 18px;
    color: black;
}
body
{

    background-color: rgb(14, 3, 41);
    width:1350px;
    
}
main

{
    height: 400px;
    color:black;
   

}
footer
{
    height: 40px;
    background-color: whitesmoke;
}
.Hea
{
    padding-left:300px;
    color: yellowgreen;
    float: right;
}
.parent
{
display:flex;
}
.child
{
    font-size: 20px;
    color: whitesmoke;
    padding-left:40px;
    background-color: rgb(14, 3, 41);
    hieght:400px;
    
}
.button {
    display: inline-block;
    border-radius: 2px;
    background-color: rgb(14, 3, 41);
    border: none;
    color: whitesmoke;
    text-align: center;
    font-size: 10px;
    padding: 2px;
    width: 50px;
    height: 25px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 1.5px;
    float: right;
    margin-top:10px;
  }
  
  .button span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
  }
  
  .button span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
  }
  
  .button:hover span {
    padding-right: 25px;
  }
  
  .button:hover span:after {
    opacity: 1;
    right: 0;
  }
  .button1 {
    display: inline-block;
    padding: 7px 14px;
    font-size: 15px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    outline: none;
    color: rgb(14, 3, 41);
    background-color: whitesmoke;
    border: none;
    border-radius: 15px;
    box-shadow: 0 9px #999;
  }
  
  .button1:hover {background-color: #3e8e41}
  
  .button1:active {
    background-color: whitesmoke;
    box-shadow: 0 5px #666;
    transform: translateY(4px);
  }
     </style>
</head>
<body>
  <form action="" method="POST">
    <div >
   <header>   
<h1>Facilities designed to live with joy</h1>
   </header>
    <nav>
    <h1>Royal Suite</h1>
    
    </nav>
   <main class="parent">
       <section>
        <img src="images/3a4539b923334373ede3cf176d0e2b63--the-luxury-luxury-hotels.jpg", height="400" alt=" Image Coming">
       </section>
       
       <section  class="child">
       <h1><br>This is the most luxurious accommodation here.<br>Condition: AC<br>Number of Bed: 1<br>
        Max People: 2<br>Food: Available<br><br>Price: 3000 BDT</h1>
        <button class="button1" name="book">Book</button>
       </section >
   </main>
   <footer>
   <button class="button" style="vertical-align:middle" name="next"><span>Next </span></button>
   </footer>
</div>
</form>
</body>
</html>