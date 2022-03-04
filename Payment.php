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

$name=$_SESSION['$userID'] ;
$checkin=$_SESSION['$checkin'];
$checkout=$_SESSION['$checkout'];
$days=$_SESSION['$days'];




$sql2= "SELECT *
FROM register inner join bookroom inner join roomdes 
on register.UserID= bookroom.UserID and bookroom.RoomID= roomdes.RoomID 
and register.UserID='$name'";
$res1= $conn->query($sql2);
if ($res1->rowCount()> 0) {
     // output data of each row
     while($row = $res1->fetch(PDO::FETCH_OBJ)) {
        $firstname= $row->First_Name;
        $lastname= $row->Last_Name;
        $Pnumber= $row->Phone_Number;
        $email= $row->Email;
        //$checkin= $row->CheckIN;
        //$checkout= $row->CheckOUT;
        //$person= $row->Person;
        $desc= $row->Description;
        $price= $row->Price;
        $air= $row-> Air_Condition;
        $bed= $row-> Number_of_Bed;

    }
}
$bill= $price* $days;

if(isset($_POST['logout'])){
    header('location:login.php');
}
if(isset($_POST['home'])){
    header('location:home.php');
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
        form{
            margin-top: 50px;
            margin-left: 50px;
        }
        
        table,th,td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        tr{
            text-align: center;
            height: 30px;
        }
        td{
            text-align: center;
        }
        .bill {
            border: 1px solid red;

        }
        .print{
            display: inline-block;        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <table style="width:60%">
            <tr>
                <th>First Name</th>
                <td><?php echo $firstname ?></td>
                <th>Room Catagory</th>
                <td><?php echo $desc ?></td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td><?php echo $lastname ?></td>
                <th>Air-Condition</th>
                <td><?php echo $air ?></td>
            </tr>
            <tr>
                <th>Phone</th>
                <td><?php echo $Pnumber ?></td>
                <th>Number of Beds </th>
                <td><?php echo $bed ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $email ?></td>
                <th>Rent/day</th>
                <td><?php echo $price."TK" ?></td>
            </tr>
            <tr>
                <th>Check In</th>
                <td><?php echo $checkin ?></td>
            </tr>
            <tr>
                <th>Check Out</th>
                <td><?php echo $checkout ?></td>
            </tr>
            
            
        </table>
        <br>
        
        <table style="width:40%" >
        <tr style="height:40px">
                <th>Bill</th>
                <td><?php echo $bill ."TK" ?></td>
            </tr>
        </table>
        
        <br>
        <br>
        <input type="submit" name="home" value="Home"><br><br>
        <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>