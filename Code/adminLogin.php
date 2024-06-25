<?php
$con = mysqli_connect("localhost", "root", "", "learning");
error_reporting(0);

if (mysqli_connect_error()) {
    die("Error connecting to the database: " . mysqli_connect_error());
}

if (isset($_POST['SignIn'])) {
    $adminName = $_POST['AdminName'];
    $adminPassword = $_POST['AdminPassword'];
    
    // Prepare the statement to prevent SQL injection
    $stmt = $con->prepare("SELECT * FROM `admin_login` WHERE `Admin_Name` = ? AND `Admin_Password` = ?");
    $stmt->bind_param("ss", $adminName, $adminPassword);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        session_start();
        $_SESSION['AdminLoginId'] = $adminName;
        header("Location: AdminPanel.php");
        exit(); // Exit to prevent further execution
    } else {
        echo "Invalid Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../Style/Admin.css">
    <style>
        body{
            background-image: url(../photos/background2.jpg);
        }
    </style>
</head>
<body>
    <div class="login-form">
        <h2>ADMIN LOGIN PANEL</h2>
        <form action="#" method="post">
            <div class="input-field">
                <i class="fas"></i>
                <input type="text" placeholder="Admin_Name" name="AdminName">
            </div>
            <div class="input-field">
                <i class="fas"></i>
                <input type="password" placeholder="Password" name="AdminPassword">
            </div>
            <button type="submit" name="SignIn">Sign In</button>
            <div class="extra">
                <a href="#">Forgot password?</a>
            </div>
        </form>
    </div>
</body>
</html>
