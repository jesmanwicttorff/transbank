<?php


$servername = "localhost";
$username = "admin";
$password = "";
$database = "webpay";


// Create connection
$conn = new mysqli($servername, $username, $password,$database);



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



?>
