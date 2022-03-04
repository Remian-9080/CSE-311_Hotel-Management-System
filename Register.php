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


if(isset($_POST['submit1'])){
    $userID= $_POST['userID'];
    $password= $_POST['password'];
    $fname= $_POST['Fname'];
    $lname= $_POST['Lname'];
    $phoneN= $_POST['phoneN'];
    $email= $_POST['email'];

    $count1= 0;
    
    $sql2= "SELECT * FROM register where UserID='$userID'";
    $res1= $conn->query($sql2);
    if($res1->rowCount()>0){
        $count1=1;
    }

    if($count1==0){
        if(!empty($userID) && !empty($password) && !empty($fname) && !empty($lname) && !empty($phoneN) && !empty($email)){
            $sql= "INSERT INTO register(UserID,Password,First_Name,Last_Name,Phone_Number,Email)
            VALUES ('$userID','$password','$fname','$lname','$phoneN','$email')";
            $conn-> exec($sql);
            header('location:Home.php');
            $_SESSION['$userID']= $userID;
        }
        else{
            header('location:Register.php?fill');
        }
    }
    else{
        header('location:Register.php?exist');
    }
}
if(isset($_POST['submit2'])){
    header('location:login.php');
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
            height: 320px;
            margin-top: 110px;
            margin-right: 60px;
            width: 320px;
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
    <b>Register</b><br><br>
    UserID: <input type="text" name="userID" placeholder="Enter UserName"> <br>
    Password: <input type="password" name="password"> <br>
    First Name: <input type="text" name="Fname" placeholder="Enter First Name"><br>
    Last Name: <input type="text" name="Lname" placeholder="Enter Last Name"><br>
    Phone Number: <input type="text" name="phoneN" placeholder="Enter Phone Number"><br>
    Email: <input type="text" name="email" placeholder="Enter Email"><br><br>

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
                if(isset($_GET['exist'])){
                    $msg="**User Name Already Exist**";
                    echo $msg;
                }
            ?>
    </div>
    <br>
    <input type="submit" name="submit1" value="Register"><br> <br> <br>
    <input type="submit" name="submit2" value="Back">
    



    </form>
</body>
</html>