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
include("connection.php");

$db= $conn;
$tableName="token";
$columns2 = ['id','token'];

$tokenNum = $_REQUEST['token'];

$sql = "INSERT INTO token(token) VALUES ('$tokenNum')";

if(mysqli_query($db,$sql)){
    echo "success!";
}
else {
    echo "Error!";
}

mysqli_close($db);
?>
</body>
</html>


