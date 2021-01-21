<?php 

// Database parameters
$servername = "localhost";
$username = "root";
$password = null;
$dbName = "mindb";

// Creates the connection the database
$conn = new mysqli($servername, $username, $password, $dbName);

// Checks the connection to the database
if($conn->connect_error) {
    die("Connection failed! " . $conn->connect_error);
}

