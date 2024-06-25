<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase</title>
    <link rel="stylesheet" href="../Style/navbar.css">
    <link rel="stylesheet" href="../Style/purchase.css">
    <link rel="stylesheet" href="../Style/footer.css">

</head>

<body>
    <nav class=" navbar">
        <div class="navheading"><a href="#" aria-current="page">Pet Purchase</a></div>
        <div class="navbaritem">
            <ul class="navitem">
                <a href="../MainPage.php">
                    <li>Home</li>
                </a>
                <a href="#cats">
                    <li>Cats</li>
                </a>
                <a href="#dogs">
                    <li>Dogs</li>
                </a>
                <a href="#others">
                    <li>Other Pets</li>
                </a>
                <a href="../Code/help.php">
                    <li>Help & Support</li>
                </a>
                <li class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </li>
                <li>
                    <a href="../Code/login.php" class="login">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="cats">
        <h3>Cats</h3>
        <div class="cat-content">
            <div class="purchasebox"><img src="../images/cat.jpg" alt="cat1">
                <form action="submit-pet.php" method="GET">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name">
                    <label for="age">Age:</label>
                    <input type="number" name="age" id="age">
                    <label for="breed">Breed:</label>
                    <input type="text" name="breed" id="breed">
                    <label for="size">Size:</label>
                    <input type="text" name="size" id="size">
                    <label for="health">Health Status:</label>
                    <input type="text" name="health" id="health">
                    <input type="submit" value="Buy">
                    <input type="submit" value="Add cart">
                </form>
            </div>
            <div class="purchasebox"><img src="" alt="cat1">
                <form action="cat" method="post">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name">
                    <label for="age">Age:</label>
                    <input type="number" name="age" id="age">
                    <label for="breed">Breed:</label>
                    <input type="text" name="breed" id="breed">
                    <label for="size">Size:</label>
                    <input type="text" name="size" id="size">
                    <label for="health">Health Status:</label>
                    <input type="text" name="health" id="health">
                    <input type="submit" value="Buy">
                    <input type="submit" value="Add cart">
                </form>
            </div>
            <div class="purchasebox"><img src="" alt="cat1">
                <form action="cat" method="post">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name">
                    <label for="age">Age:</label>
                    <input type="number" name="age" id="age">
                    <label for="breed">Breed:</label>
                    <input type="text" name="breed" id="breed">
                    <label for="size">Size:</label>
                    <input type="text" name="size" id="size">
                    <label for="health">Health Status:</label>
                    <input type="text" name="health" id="health">
                    <input type="submit" value="Buy">
                    <input type="submit" value="Add cart">
                </form>
            </div>
            <div class="purchasebox"><img src="" alt="cat1">
                <form action="cat" method="post">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name">
                    <label for="age">Age:</label>
                    <input type="number" name="age" id="age">
                    <label for="breed">Breed:</label>
                    <input type="text" name="breed" id="breed">
                    <label for="size">Size:</label>
                    <input type="text" name="size" id="size">
                    <label for="health">Health Status:</label>
                    <input type="text" name="health" id="health">
                    <input type="submit" value="Buy">
                    <input type="submit" value="Add cart">
                </form>
            </div>
            <div class="purchasebox"><img src="" alt="cat1">
                <form action="cat" method="post">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name">
                    <label for="age">Age:</label>
                    <input type="number" name="age" id="age">
                    <label for="breed">Breed:</label>
                    <input type="text" name="breed" id="breed">
                    <label for="size">Size:</label>
                    <input type="text" name="size" id="size">
                    <label for="health">Health Status:</label>
                    <input type="text" name="health" id="health">
                    <input type="submit" value="Buy">
                    <input type="submit" value="Add cart">
                </form>
            </div>
        </div>
    </div>
    <div id="dogs">
        <h3>Dogs</h3>
        <div class="cat-content">
            <div class="purchasebox"><img src="" alt="cat1">
                <form action="cat" method="post">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name">
                    <label for="age">Age:</label>
                    <input type="number" name="age" id="age">
                    <label for="breed">Breed:</label>
                    <input type="text" name="breed" id="breed">
                    <label for="size">Size:</label>
                    <input type="text" name="size" id="size">
                    <label for="health">Health Status:</label>
                    <input type="text" name="health" id="health">
                    <input type="submit" value="Buy">
                    <input type="submit" value="Add cart">
                </form>
            </div>
            <div class="purchasebox"><img src="" alt="cat1">
                <form action="cat" method="post">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name">
                    <label for="age">Age:</label>
                    <input type="number" name="age" id="age">
                    <label for="breed">Breed:</label>
                    <input type="text" name="breed" id="breed">
                    <label for="size">Size:</label>
                    <input type="text" name="size" id="size">
                    <label for="health">Health Status:</label>
                    <input type="text" name="health" id="health">
                    <input type="submit" value="Buy">
                    <input type="submit" value="Add cart">
                </form>
            </div>
            <div class="purchasebox"><img src="" alt="cat1">
                <form action="cat" method="post">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name">
                    <label for="age">Age:</label>
                    <input type="number" name="age" id="age">
                    <label for="breed">Breed:</label>
                    <input type="text" name="breed" id="breed">
                    <label for="size">Size:</label>
                    <input type="text" name="size" id="size">
                    <label for="health">Health Status:</label>
                    <input type="text" name="health" id="health">
                    <input type="submit" value="Buy">
                    <input type="submit" value="Add cart">
                </form>
            </div>
            <div class="purchasebox"><img src="" alt="cat1">
                <form action="cat" method="post">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name">
                    <label for="age">Age:</label>
                    <input type="number" name="age" id="age">
                    <label for="breed">Breed:</label>
                    <input type="text" name="breed" id="breed">
                    <label for="size">Size:</label>
                    <input type="text" name="size" id="size">
                    <label for="health">Health Status:</label>
                    <input type="text" name="health" id="health">
                    <input type="submit" value="Buy">
                    <input type="submit" value="Add cart">
                </form>
            </div>
            <div class="purchasebox"><img src="" alt="cat1">
                <form action="cat" method="post">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name">
                    <label for="age">Age:</label>
                    <input type="number" name="age" id="age">
                    <label for="breed">Breed:</label>
                    <input type="text" name="breed" id="breed">
                    <label for="size">Size:</label>
                    <input type="text" name="size" id="size">
                    <label for="health">Health Status:</label>
                    <input type="text" name="health" id="health">
                    <input type="submit" value="Buy">
                    <input type="submit" value="Add cart">
                </form>
            </div>
        </div>
    </div>
    <div id="others">
        <h3>Other Pets</h3>
        <div class="cat-content">
            <div class="purchasebox"><img src="" alt="cat1">
                <form action="cat" method="post">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name">
                    <label for="age">Age:</label>
                    <input type="number" name="age" id="age">
                    <label for="breed">Breed:</label>
                    <input type="text" name="breed" id="breed">
                    <label for="size">Size:</label>
                    <input type="text" name="size" id="size">
                    <label for="health">Health Status:</label>
                    <input type="text" name="health" id="health">
                    <input type="submit" value="Buy">
                    <input type="submit" value="Add cart">
                </form>
            </div>
            <div class="purchasebox"><img src="" alt="cat1">
                <form action="cat" method="post">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name">
                    <label for="age">Age:</label>
                    <input type="number" name="age" id="age">
                    <label for="breed">Breed:</label>
                    <input type="text" name="breed" id="breed">
                    <label for="size">Size:</label>
                    <input type="text" name="size" id="size">
                    <label for="health">Health Status:</label>
                    <input type="text" name="health" id="health">
                    <input type="submit" value="Buy">
                    <input type="submit" value="Add cart">
                </form>
            </div>
            <div class="purchasebox"><img src="" alt="cat1">
                <form action="cat" method="post">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name">
                    <label for="age">Age:</label>
                    <input type="number" name="age" id="age">
                    <label for="breed">Breed:</label>
                    <input type="text" name="breed" id="breed">
                    <label for="size">Size:</label>
                    <input type="text" name="size" id="size">
                    <label for="health">Health Status:</label>
                    <input type="text" name="health" id="health">
                    <input type="submit" value="Buy">
                    <input type="submit" value="Add cart">
                </form>
            </div>
            <div class="purchasebox"><img src="" alt="cat1">
                <form action="cat" method="post">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name">
                    <label for="age">Age:</label>
                    <input type="number" name="age" id="age">
                    <label for="breed">Breed:</label>
                    <input type="text" name="breed" id="breed">
                    <label for="size">Size:</label>
                    <input type="text" name="size" id="size">
                    <label for="health">Health Status:</label>
                    <input type="text" name="health" id="health">
                    <input type="submit" value="Buy">
                    <input type="submit" value="Add cart">
                </form>
            </div>
            <div class="purchasebox"><img src="" alt="cat1">
                <form action="cat" method="post">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name">
                    <label for="age">Age:</label>
                    <input type="number" name="age" id="age">
                    <label for="breed">Breed:</label>
                    <input type="text" name="breed" id="breed">
                    <label for="size">Size:</label>
                    <input type="text" name="size" id="size">
                    <label for="health">Health Status:</label>
                    <input type="text" name="health" id="health">
                    <input type="submit" value="Buy">
                    <input type="submit" value="Add cart">
                </form>
            </div>
        </div>
    </div>
    <footer>
        <h3>Connect with Us</h3>
        <div class="footer-content">
            <div class="contact-details">
                <div class="footer-header">Contact</div>
                <p>Email: <a href="mailto:info@example.com">info@example.com</a></p>
                <p>Phone: <a href="tel:+1234567890">+977 98********</a></p>
                <p>Address: 123 xyz ABC</p>
            </div>
            <div class="social-media">
                <div class="footer-class">Social Media</div>
                <a href="www.facebook.com"><img src="../Images/facebook-circle-logo-24.png" alt="Facebook Logo"></a>
                <a href="www.instagram.com"><img src="../Images/instagram-alt-logo-24.png" alt="instagram Logo"></a>
                <a href="www.twitter.com"><img src="../Images/twitter-logo-24.png" alt="twitter Logo"></a>
                <a href="www.youtube.com"><img src="../Images/youtube-logo-24.png" alt="youtube Logo"></a>
            </div>
            <div class="quick-link">
                <div class="footer-header">Quick link</div>
                <a href="">Home</a>
                <a href="">Become a seller</a>
                <a href="">About</a>
                <a href="">Help & Support</a>
                <a href="">Login</a>
            </div>
        </div>
    </footer>
</body>

</html>