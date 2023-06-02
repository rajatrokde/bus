<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bus";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST["name"];
$email = $_POST["email"];
$passType = $_POST["pass-type"];
$startDate = $_POST["start-date"];
$endDate = $_POST["end-date"];

// Insert data into database
$sql = "INSERT INTO bus_passes (name, email, pass_type, start_date, end_date) VALUES ('$name', '$email', '$passType', '$startDate', '$endDate')";

if ($conn->query($sql) === TRUE) {
echo "Pass created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
