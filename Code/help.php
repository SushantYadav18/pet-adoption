<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/navbar.css">
    <link rel="stylesheet" href="../Style/help.css">
    <link rel="stylesheet" href="../Style/footer.css">
    <title>Help & Support</title>
</head>

<body>
    <nav class=" navbar">
        <div class="navheading"><a href="#" aria-current="page">Help & Support</a></div>
        <div class="navbaritem">
            <ul class="navitem">
                <a href="../index.php">
                    <li>Home</li>
                </a>
                <a href="#faq">
                    <li>FAQs</li>
                </a>
                <a href="#how-it-works">
                    <li>Guide</li>
                </a>
                <a href="#feedback">
                    <li>Feedback</li>
                </a>
                <a href="#privacy-policy">
                    <li>Privacy & Policy</li>
                </a>
                <li>
                    <a href="#contact">Contact us</a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="faq">
        <div class="faq-container">
            <h1>Pet Buying and Selling FAQs</h1>

            <div class="faq-item">
                <p class="question">Q: How can I buy a pet from your website?</p>
                <p>A: To buy a pet, please navigate to our "Pets for Sale" section where you can browse
                    listings of available pets and contact the sellers for further details.</p>
            </div>

            <div class="faq-item">
                <p class="question">Q: Can I sell my pet on your website?</p>
                <p>A: Yes, you can! We provide a platform for pet owners to list their pets for sale. Simply register an
                    account and follow the steps to create a listing.</p>
            </div>

            <div class="faq-item">
                <p class="question">Q: Are there any fees associated with selling a pet?</p>
                <p>A: We may charge a small fee for listing your pet for sale on our website. Please refer to our terms
                    and conditions for more information.</p>
            </div>

            <!-- Add more FAQs here -->

            <div class="faq-item">
                <p class="question">Q: How can I ensure the welfare of the pet I'm buying?</p>
                <p>A: We encourage buyers to thoroughly research the sellers and ask questions about the pet's health,
                    upbringing, and living conditions. Additionally, consider adopting from reputable shelters and
                    rescue organizations.</p>
            </div>
        </div>
    </div>
    <div id="how-it-works">
        <h2>How It Works</h2>
        <div data-aos="fade-up" class="steps">
            <!-- Concise steps on how to buy or sell a pet on Pet Link with icons and visuals -->
            <div class="step">
                <img src="icon1.png" alt="Step 1">
                <p>Create an account on Pet Link.</p>
            </div>

            <div class="step">
                <img src="icon2.png" alt="Step 2">
                <p>Explore our pet listings to find the perfect match.</p>
            </div>

            <div class="step">
                <img src="icon3.png" alt="Step 3">
                <p>Contact the seller for more information or to schedule a meeting.</p>
            </div>

            <div class="step">
                <img src="icon4.png" alt="Step 4">
                <p>Meet the pet, ask questions, and ensure it's a good fit for your home.</p>
            </div>

            <div class="step">
                <img src="icon5.png" alt="Step 5">
                <p>Complete the transaction securely through Pet Link's platform.</p>
            </div>

        </div>
    </div>
    <div id="feedback">
        <div class="container">
            <h2>Feedback Form</h2>
            <form action="submit_feedback.php" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="feedback">Feedback:</label>
                    <textarea id="feedback" name="feedback" rows="5" required></textarea>
                </div>
                <input type="submit" value="Submit">
                <input type="reset" value="Cancel">
            </form>
        </div>
    </div>
    <div id="privacy-policy">
        <h1>Terms of Service</h1>
        <p>
            By using this service, you agree to be bound by these terms of service. If you do not agree to these terms,
            please do not use this service.
        </p>
        <h2>User Eligibility</h2>
        <p>
            This service is intended for users who are at least 18 years old. By using this service, you represent and
            warrant that you are at least 18 years old.
        </p>
        <h2>User Accounts</h2>
        <p>
            You are responsible for maintaining the confidentiality of your account and password. You agree to notify us
            immediately of any unauthorized access to or use of your account.
        </p>
        <h1>Privacy Policy</h1>
        <p>
            This Privacy Policy governs the manner in which our website collects, uses, maintains, and discloses
            information collected from users.
        </p>
        <h2>Information Collection</h2>
        <p>
            We may collect personal identification information from users in a variety of ways, including, but not
            limited to, when users visit our site, register on the site, place an order, subscribe to the newsletter,
            respond to a survey, fill out a form, and in connection with other activities, services, features or
            resources we make available on our site.
        </p>
        <h2>Use of Information</h2>
        <p>
            Any information provided by users will only be used for the purpose for which it was provided, unless users
            give consent otherwise.
        </p>
    </div>
    <footer id="contact">
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