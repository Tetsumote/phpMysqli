<?php
// 1. Create a database connection
$dbhost = "localhost";
$dbuser = "lynda";
$dbpass = "lynda";
$dbname = "lynda";
$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
// Test if connection occurred.
if(mysqli_connect_errno()){
    die("Database connection failed: " .
    mysqli_connect_error() .
    " (" . mysqli_connect_errno() . ")"
    );
}else{
    echo "success!";
}
?>
<?php
$id = 8;
$manu_name = "Edit";
$position = 4;
$visible = 1;


$query = "UPDATE subjects SET ";
$query .= "manu_name = '{$manu_name}', ";
$query .= "position = {$position}, ";
$query .= "visible = {$visible} ";
$query .= "WHERE id = {$id}";

$result = mysqli_query($connection,$query);

// Test if there was a query error
if($result){
    //success
    //redirect_to("somepage.php");
    echo "Success!";
}else{
    //Failure
    //$message = "Subject creation failed";
    die("Database query failed. " . mysqli_error($connection));
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
<?php
// 5.Close database connection
mysqli_close($connection);
?>