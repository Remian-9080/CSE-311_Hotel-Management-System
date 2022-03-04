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

$sql2= "SELECT * FROM register where UserID='$name'";
$res1= $conn->query($sql2);
if ($res1->rowCount()> 0) {
    // output data of each row
    while($row = $res1->fetch(PDO::FETCH_OBJ)) {
        $firstname= $row->First_Name;
        $lastname= $row->Last_Name;
        $password= $row->Password;
        $Pnumber= $row->Phone_Number;
        $email= $row->Email;
    }
}
if(isset($_POST['submit2'])){
    header('location:History.php');
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
        
        table,th,td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        tr{
            height: 30px;
        }
        td{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="info">
        <table style="width:30%">
            <tr>
                <th>First Name</th>
                <td><?php echo $firstname?></td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td><?php echo $lastname?></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><?php echo $password." "?><a href="Change.php"><input type="submit" name="submit" value="Change"></a> </td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td><?php echo $Pnumber?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $email?></td>
            </tr>

        </table>
    </div>
    
    <br><a href="Home.php"><input type="submit" name="submit2" value="Back"></a>
    <br><a href="History.php"><input type="submit" name="submit2" value="History"></a>

</body>
</html> 