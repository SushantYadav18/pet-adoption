<?php
// Database connection parameters
$servername = "localhost"; // Change this to your database server name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "petlink"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Retrieve form data and sanitize
$username = mysqli_real_escape_string($conn, $_POST['username']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$contact = mysqli_real_escape_string($conn, $_POST['contact']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$role = mysqli_real_escape_string($conn, $_POST['role']);

// Hash the password for security
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert data into the database
$sql = "INSERT INTO register (username, address, contact, email, password, role)
VALUES ('$username', '$address', '$contact', '$email', '$hashed_password', '$role')";

if ($conn->query($sql) === TRUE) {
echo "Registration successful!";
header("location: login.php");
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}

// Close connection
$conn->close();
?>