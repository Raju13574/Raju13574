<?php
$servername = "your-rds-endpoint";
$username = "your-username";
$password = "your-password";
$dbname = "your-database-name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$age = $_POST['age'];

$sql = "INSERT INTO your_table_name (name, age) VALUES ('$name', $age)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>