<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "database";

// Connect to the database
$con = mysqli_connect($server, $username, $password, $dbname);

// Check connection
if(!$con) {
    die("not connected...! " . mysqli_connect_error());
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$user_password = $_POST['password'];
$phone = $_POST['phone'];
$city = $_POST['city'];

// Prepare SQL query
$sql = "INSERT INTO `display` (`name`, `email`, `password`, `phone`, `city`) VALUES ('$name', '$email', '$user_password', '$phone', '$city')";

// Execute SQL query
$Resul = mysqli_query($con, $sql);

// Check if the query was successful
if($Resul) {
    echo "Data Submitted";
} else {
    echo "Query Failed: " . mysqli_error($con);
}

// Close the database connection
mysqli_close($con);

?>
