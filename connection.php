<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

	?>