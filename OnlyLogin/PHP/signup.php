<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect("localhost", "root", "", "login");

// get the post records
$username = $_POST['username'];
$password = $_POST['password'];
$password1 = $_POST['password1'];
$number = $_POST['number'];


// database insert SQL code
$sql = "INSERT INTO `users` (`Username`, `Password`, `number`) VALUES ('$username', '$password', '$number')";
// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
    echo "Your account is created";
}
else{
    echo 'Failed'. $con->error;
}

?>
