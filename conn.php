<?php
// Database configuration
$servername = "localhost"; // Change this to your MySQL server hostname
$username = "root"; // Change this to your MySQL username
$password = " "; // Change this to your MySQL password
$database = "shedrack"; // Change this to your MySQL database name

// Create connection
$conn = new mysqli("localhost", "root", "", "shedrack");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Age = $_POST['Age'];
$Message = $_POST['Message'];

// SQL query to insert data into the database
$sql = "INSERT INTO forms (Name, Email, Age, Message) VALUES ('$Name', '$Email', '$Age', '$Message')"; // Change "your_table_name" to your actual table name

// Execute query
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close( );
header('location:conn.php');
?>
