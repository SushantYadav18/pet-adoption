<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/login.css">
    <title>Document</title>
</head>

<body>
    <div class="form-container">
        <p class="title">Login</p>
        <form class="form" action="loginConnect.php" method="POST">
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="" required>
            </div>
            <div class="role-select">
                <select name="role" id="role">
                    <option value="admin">Admin</option>
                    <option value="teacher">Buyer</option>
                    <option value="student/parent">Seller</option>
                </select>
            </div>

<?php
session_start(); // Start the session

// Display success message if set
if (isset($_SESSION['success_message'])) {
    echo '<script>alert("' . $_SESSION['success_message'] . '");</script>';
    unset($_SESSION['success_message']); // Clear the session variable
    header("Location: dashboard.php");
}

// Display error message if set
if (isset($_SESSION['error_message'])) {
    echo '<script>alert("' . $_SESSION['error_message'] . '");</script>';
    unset($_SESSION['error_message']); // Clear the session variable
  
}
?>
            <div class="login-button"> <button class="sign">Login</button>
                <button class="cancel" type="cancel"><a href="../.php">Cancel</a></button>
            </div>
            <p>Don't Have an Account? <a href="../Code/register.php"> Click here sign up</a></p>

        </form>
    </div>
    <footer>
        <h3>Connect with Us</h3>
        <div class="connect">

            <div class="contact-details">
                <div class="footer-header">Contact</div>
                <p>Email: <a href="mailto:info@example.com">info@example.com</a></p>
                <p>Phone: <a href="tel:+1234567890">+977 98********</a></p>
                <p>Address: 123 xyz ABC</p>
            </div>

            <div class="contact-details">
                <div class="footer-header">Social Media</div>
                <a class="facebook" href="www.facebook.com"><img src="/Images/facebook-circle-logo-24.png"
                        alt="Facebook"></a>
                <a class="instagram" href="www.instagram.com"><img src="/Images/instagram-alt-logo-24.png"
                        alt="Instagram"></a>
                <a href="www.youtube.com" class="youtube"><img src="/Images/youtube-logo-24.png" alt="Youtube"></a>
                <a href="www.twitter.com" class="twitter"><img src="/Images/twitter-logo-24.png" alt="Twitter"></a>
            </div>
        </div>
    </footer>

</body>

</html>