<?php
session_start();
if (!isset($_SESSION['BCIT']) || $_SESSION['BCIT'] == false) {
    header('Location: login.php');
    exit();
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secret Page</title>
</head>
<body>
    Hello BCIT person
</body>
</html>