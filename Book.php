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
if(isset($_POST['submit'])){
    $username= $_SESSION['$userID'];
    $roomid= $_SESSION['$room'];
    //$checkin= date('Y-m-d',strtotime($_POST['checkin']));
    //$checkout= date('Y-m-d',strtotime($_POST['checkout']));
    $checkin=$_POST['checkin'];
    $checkout=$_POST['checkout'];
    $person= $_POST['person'];
    
    $diff=abs(strtotime($checkout)- strtotime($checkin));
    $days= floor($diff/86400);
    $_SESSION['$checkin']= $checkin;
    $_SESSION['$checkout']= $checkout;
    $_SESSION['$days']= $days;
    if(!empty($checkin) && !empty($checkout) && !empty($person)){ 
        if($checkout>$checkin){
        //echo $diff;
         
        //echo $days;
         $sql= "INSERT INTO bookroom(UserID,RoomID,CheckIN,CheckOUT,No_of_days,Person)
             VALUES ('$username','$roomid','$checkin','$checkout','$days','$person')";
             $conn-> exec($sql);
        header('location:Payment.php');
        }
        else{
            header('location:Book.php?date');        

        }
        
    }
    else{
        header('location:Book.php?fill');    
    }
}
if(isset($_POST['back'])){
    header('location:room_3.php');
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
        .box{
            border: 1px solid black;
            width: 70%;
            height: 80px;
            margin
            padding: 10px;
            

        }
        .arr1,.arr2,.arr3,.arr4{
            display: inline-block;
            padding: 20px;

        }
        .arr{
            margin-top: 30px;
        }
        body
        {
        background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)),
         url("image101.jpg");
         /* width:100%; */
        height:100vh;
        background-size: 100% 100%; 
        }
        form{

            color: white;
            height: 370px;
            margin-top: 110px;
            margin-left: 60px;
            width: 320px;
            border: 2px solid black;
            padding: 30px;
            background: rgba(0,0,0,0.6);
            border-radius: 25px;
            
        }
        .msg1{
            color: red;
            margin-left: 15px;
        }
        .arr5{
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <div class="box">
            <div class="arr1">
                Check-In: <input type="date" name="checkin" placeholder="insert date"><br>
            </div>
            <div class="arr2">
                Check-Out: <input type="date" name="checkout" placeholder="insert date"><br>
            </div>
            <div class="arr3">
                Persons: <input type="number" min="1" max="5" name="person"> <br><br>
            </div>

            <div class="msg1">
            <?php
                $msg="";
                if(isset($_GET['date'])){
                    $msg="**Check In Date is After Check Out**";
                    echo $msg;
                }
            ?>
             </div>

             <div class="msg1">
            <?php
                $msg="";
                if(isset($_GET['fill'])){
                    $msg="**Please Fill Up**";
                    echo $msg;
                }
            ?>
             </div>

            <div class="arr4">
                <input type="submit" name="submit" value="Submit">
            </div>
            <div class="arr5">
                <input type="submit" name="back" value="Back">
            </div>

             
        </div>




    </form>
</body>
</html>