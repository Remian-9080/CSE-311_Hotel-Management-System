<?php
$serverName= "localhost";
$username= "root";
$password= "";
$dbName= "projectn";
session_start();
//$messeage= "Wrong password";

    //echo "thanks";

try{
    $conn= new PDO("mysql:host=$serverName;dbname=$dbName", $username, $password);
    $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected Succesfully";

}catch(PDOExpection $exc){
    echo "Connection Failed" .$exc->getmessage();
    exit();
}

if(isset($_POST['submit2'])){
    
    $userID= $_POST['userID'];
    $password= $_POST['password'];
if(!empty($userID) && !empty($password)){
    $sql2= "SELECT * FROM register where UserID='$userID' AND Password='$password'";
    $res= $conn->query($sql2);
    if($res->rowCount()> 0){
        header('location:Home.php');
        //session_start();
        //$_SESSION['userID']= $userID;
        //header("location:Register.php");

        
        $_SESSION['$userID']= $userID;
    }
    else{
        header('location:Login.php?error');
    }
    unset($res);
    
}
else{
    header('location:Login.php?fill');
}
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
            width: 300px;
            border: 2px solid black;
            padding: 30px;
            background: rgba(0,0,0,0.6);
            border-radius: 25px;
            
        }
        .msg1{
            color: red;
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
        <div class="title"><b>Login</b></div><br>
        UserID: <input type="text" name="userID" placeholder="Enter UserName"> <br>
        Password: <input type="password" name="password"> <br><br>

        <div class="msg1">
            <?php
                $msg="";
                if(isset($_GET['error'])){
                    $msg="**Wrong UserID or Password**";
                    echo $msg;
                }
            ?>
        </div>

        <div class="msg1">
            <?php
                $msg="";
                if(isset($_GET['fill'])){
                    $msg="**Fill up**";
                    echo $msg;
                }
            ?>
        </div>
        <br>

        <div class="re"><a href="Register.php">Create a new Account</a> <br><br></div>
        
        <input type="submit" name="submit2" value="Login">
    </form>
</body>
</html>