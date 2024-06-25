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
        <p class="title">Register</p>
        <form class="form" action="connect.php" method="POST">
            <div class="input-group">
                <label for="username">Enter your full name:</label>
                <input type="username" name="username" id="username" placeholder="" required>
            </div>
            <div class="input-group">
                <label for="address">Enter your Address:</label>
                <input type="address" name="address" id="address" placeholder="" required>
            </div>
            <div class="input-group">
                <label for="contact">Enter your contact number:</label>
                <input type="tel" name="contact" id="contact" placeholder="" required>
            </div>
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="" required>
            </div>
            <div class="input-group">
                <label for="password">Set Password:</label>
                <input type="password" name="password" id="password" placeholder="" required>
            </div>
            <div class="input-group">
                <label for="confirm-password">Confirm your password</label>
                <input type="password" name="confirm-password" id="confirm-password" placeholder="" required>
            </div>
            <div class="role-select">
                <select name="role" id="role">
                    <option value="buyer">Buyer</option>
                    <option value="seller">Seller</option>
                </select>
            </div>
            <div class="login-button"> <button class="sign" type="submit">Resigter</button>
                <button class="cancel" type="cancel"><a href=" ../index.php">Cancel</a></button>
            </div>
            <p>Already Have an Account <a href="../Code/login.php">Sign up</a></p>
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
                <a class="facebook" href="www.facebook.com"><img src="../Images/facebook-circle-logo-24.png"
                        alt="Facebook"></a>
                <a class="instagram" href="www.instagram.com"><img src="../Images/instagram-alt-logo-24.png"
                        alt="Instagram"></a>
                <a href="www.youtube.com" class="youtube"><img src="../Images/youtube-logo-24.png" alt="Youtube"></a>
                <a href="www.twitter.com" class="twitter"><img src="../Images/twitter-logo-24.png" alt="Twitter"></a>
            </div>
        </div>
    </footer>
  
</body>

</html>