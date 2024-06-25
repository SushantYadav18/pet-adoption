<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/sell.css">
    <title>Seller</title>

</head>

<body>
    <div class="form-container">
        <p class="title">Fill form with your pet details</p>
        <form class="form" action="submit-pet.php" method="POST" enctype="multipart/form-data">
            <div class=" input-group">
                <label for="image">Select image and video:</label>
                <input type="file" name="image" id="image" accept="image/*, video/*" multiple required>
            </div>
            <div class="input-group">
                <label for="name">Pet Name:</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="input-group"> <label for="age"> Pet Age:</label>
                <input type="number" name="age" id="age" required>
            </div>
            <div class="input-group"><label for="breed">Breed:</label>
                <input type="text" name="breed" id="breed" required>
            </div>
            <div class="input-group"> <label for="size">Size:</label>
                <input type="text" name="size" id="size" required>
            </div>
            <div class="input-group"> <label for="health">Health Status:</label>
                <input type="text" name="health" id="health" required>
            </div>
            <div class="input-group "> <label for="description">Description about pet:</label>
                <textarea class="inputgroup" name="description" id="description" rows="5"
                    required>Description</textarea>
            </div>


            <div class="role-select">
                <select name="role" id="role">
                    <option value="Cat">Cat</option>
                    <option value="Dog">Dog</option>
                    <option value="Birds & Other">Other</option>
                </select>
            </div>
            <div class="pet-submit"> <button type="submit">Submit</button>
                <button class="cancel" type="cancel"><a href="../index.php">Cancel</a></button>
            </div>
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
            <div class="quick-link">
                <div class="footer-header">Quick link</div>
                <a href="../index.php">Home</a>
                <a href="../Code/purchase.php">Buy Pet</a>
                <a href="../Code/about.php">About</a>
                <a href="../Code/help.php">Help & Support</a>
                <a href="../Code/login.php">Login</a>
            </div>
        </div>
    </footer>

</body>

</html>