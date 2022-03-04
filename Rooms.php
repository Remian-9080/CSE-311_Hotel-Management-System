<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    date_default_timezone_set("Asia/Dhaka");
    echo "The time is " .date("h:i:sa") ;
    echo "<br>"; 

    echo "The date is " .date("d:m:Y");
?>
    <input type="submit" name="" value="Book">
    <input type="submit" name="" value="Book">
    <input type="submit" name="" value="Book">
</body>
</html>