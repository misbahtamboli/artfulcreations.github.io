<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "artful";

// Create a connection
$con = mysqli_connect($host, $username, $password, $dbname);

// Check the connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
    header('location: order.html');
    header('location: customization.html');
    header('location: contact.html');
}
?>