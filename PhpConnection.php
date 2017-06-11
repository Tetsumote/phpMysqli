<?php
//1. Create a database connection
$dbhost = "localhost";
$dbuser = "lynda";
$dbpass = "lynda";
$dbname = "lynda";
$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
//Test if connection occurred.
if(mysqli_connect_errno()){
    die("Database connection failed: " .
    mysqli_connect_error() .
    " (" . mysqli_connect_errno() . ")"
    );
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php connection</title>
</head>
<body>
    




</body>
</html>