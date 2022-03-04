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
$name=$_SESSION['$userID'];
$sql2= "SELECT *
FROM register inner join bookroom inner join roomdes
on register.UserID=bookroom.UserID and roomdes.RoomID= bookroom.RoomID
and bookroom.UserID='$name'
order by bookroom.checkin";
$res1= $conn->query($sql2);
echo '<table>
    <tr>
        <th>Room Catagory</th>
        <th>Check In</th>
        <th>Check Out</th>
    </tr>';

    if ($res1->rowCount()> 0) {
        // output data of each row
        while($row = $res1->fetch(PDO::FETCH_OBJ)) {
            $description=$row->Description;
            $checkin=$row->CheckIN;
            $checkout=$row->CheckOUT;
            echo '<tr>
                <td>'.$description.'</td>
                <td> '. $checkin.' </td>
                <td> '.$checkout.'</td>
            </tr>';
        }
    }
echo '</table>';
if(isset($_POST['back'])){
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
        *{
            margin-top: 20px;
            margin-left: 50px;
        }
        table{
            
            border-collapse: collapse;
            width: 40%;
        }
        th,td{
            text-align: left;
            padding:8px;
        }
        tr:nth-child(even){
            background: lightgrey;
        }
        th{
            background-color: #04AA6D;
            color: white;
        }
        input{
            margin-top: -10px;
            margin-left: 0px;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
    <input type="submit" name="back" value="Back"> 
        
    </form>
    
</body>
</html>