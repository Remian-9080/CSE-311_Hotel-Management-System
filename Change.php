<?php
$serverName= "localhost";
$username= "root";
$password= "";
$dbName= "projectn";

try{
    $conn= new PDO("mysql:host=$serverName;dbname=$dbName", $username, $password);
    $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOExpection $exc){
    echo "Connection Failed" .$exc->getmessage();
    exit();
}
session_start();

$name=$_SESSION['$userID'] ;

if(isset($_POST['submit'])){
    $opass=$_POST['opass'];
    $npass=$_POST['npass'];
    $cpass=$_POST['cpass'];
    $flag=0;
    if(!empty($opass) && !empty($npass) && !empty($cpass)){
        if($npass==$cpass){
            $sql2= "SELECT * FROM register where UserID='$name' AND Password='$opass'";
            $res1= $conn->query($sql2);
            if($res1->rowCount()>0){
                $flag=1;
            }

            if($flag==1){
                $sql= "UPDATE register set Password='$npass' where UserID='$name' ";
                $conn-> exec($sql);
                header('location:Change.php?success');            
            }
            else{
                header('location:Change.php?donot');            
            }
        }
        else{
            header('location:Change.php?newcon');        
        }
    }
    else{
        header('location:Change.php?fill');
    }
}

if(isset($_POST['submit2'])){
    header('location:User.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)),
         url("images2.jpg");
         /* width:100%; */
        height:100vh;
        background-size: 100% 100%;

            justify-content: right;
            /*align-items: center;*/
            display: flex;
            font-family: Century gothic;
        }
        form{
            color: white;
            height: 300px;
            margin-top: 110px;
            margin-right: 60px;
            width: 350px;
            border: 2px solid black;
            padding: 30px;
            background: rgba(0,0,0,0.6);
            border-radius: 25px;
            
        }
        .msg1{
            color: red;
        }
        .msg2{
            color: lightgreen;
        }
        .title{
            font-size: 30px;
        }
        .re{
            text-decoration: none;
            color: white;
        }
        a{
        color: lightblue;
        text-decoration: none;
        }
    </style>
</head>
<body>
    <form action="" method="POST">

    <div>
        <b>Change password</b> <br><br>
        Old Password: <input type="text" name="opass"> <br>
        New Password: <input type="text" name="npass" > <br>
        Confirm Password: <input type="text" name="cpass" > <br><br>
        <div class="msg1">
            <?php
                $msg="";
                if(isset($_GET['fill'])){
                    $msg="**Fill Up**";
                    echo $msg;
                }
            ?>
        </div>

        <div class="msg1">
            <?php
                $msg="";
                if(isset($_GET['newcon'])){
                    $msg="**New Password and Confirm Password do not match**";
                    echo $msg;
                }
            ?>
        </div>

        <div class="msg1">
            <?php
                $msg="";
                if(isset($_GET['donot'])){
                    $msg="**Wrong Old Password**";
                    echo $msg;
                }
            ?>
        </div>

        <div class="msg2">
            <?php
                $msg="";
                if(isset($_GET['success'])){
                    $msg="**Password Changed Successfully**";
                    echo $msg; 
                }
            ?>
        </div>
        <input type="submit" name="submit" value="Change"> <br> <br> <br>
        <input type="submit" name="submit2" value="Back">



    </div>
    </form>
</body>
</html>