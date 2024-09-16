<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = ""; // Replace with your MySQL password
$dbname = "dashboard";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch blogs from the database
$sql = "SELECT * FROM blogs ORDER BY uploaded_at DESC";

$result = $conn->query($sql);
?>