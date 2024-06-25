<?php
session_start();

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

// Start the session

$email = $_POST['email'];
$password = $_POST['password'];

// Prepared statement to prevent SQL injection
$sql = "SELECT * FROM register WHERE Email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $_SESSION['email'] = $email;
    $row = $result->fetch_assoc();
    $hashed_password = $row['password'];

    // Verify the password
    if (password_verify($password, $hashed_password)) {
        // Regenerate session ID to prevent session fixation
        session_regenerate_id(true);
      
        $_SESSION['success_message'] = "Login successful";
        header("Location: dashboard.php");
        exit;
    } else {
        $_SESSION['error_message'] = "Incorrect password";
    }
} else {
    $_SESSION['error_message'] = "User not found";
}

$conn->close();
header("Location: login.php"); // Redirect back to the login page
exit;
?>
