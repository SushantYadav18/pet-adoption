<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/navbar.css">
    <link rel="stylesheet" href="../Style/style.css">
    <link rel="stylesheet" href="../Style/footer.css">
    <!-- From CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <title>Pet Link</title>

</head>

<body>
    <nav class=" navbar">
        <div class="navheading"><a href="#" aria-current="page">Pet Link</a></div>
        <div class="navbaritem">
            <ul class="navitem">
                <a href="#">
                    <li>Home</li>
                </a>
                <a href="../Code/purchase.php">
                    <li>Buy Pets</li>
                </a>
                <a href="../Code/adminLogin.php">
                    <li>Admin</li>
                </a>
                <a href="../Code/about.php">
                    <li>About</li>
                </a>
                <a href="../Code/help.php">
                    <li>Help & Support</li>
                </a>
                <li>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </li>
                <a href="../Code/login.php" class="login">Login</a>
            </ul>
        </div>
    </nav>
    <div id="home">
        <!-- Image Wrap / crausal image -->
        <div class="image_wrrap">
            <div class="image_box">
                <img src="../Images/first.jpg" alt=" First Image" />
                <img src="../Images/second.jpg" alt="Second Image" />
                <img src="../Images/third.jpeg" alt="Third Image" />
                <img src="../Images/fourth.jpeg" alt="Fourth Image" />
            </div>
        </div>

        <!-- Welcome Section -->
        <div class="welcome">
            <div class="welcome-content">
                <h1>Welcome to Pet Link!</h1>
                <p>We're dedicated to connecting pet lovers and helping you find the perfect companion. Join our
                    community
                    and experience the joy of responsible pet ownership.</p>
            </div>
        </div>
        <!-- Feature categories -->
        <div data-aos="fade-up" class="featured-categories">
            <!-- Featured categories with high-quality images -->
            <!-- Quick links to popular pet types or breeds -->
            <div class="category-card">
                <img src="../Images/first.jpg" alt="Cats Category" width="400px" height="200px">
                <h2>Cats</h2>
                <p>Explore our collection of adorable cats. Find your purr-fect companion.</p>

                <button class="pet-btn"><a href="#">View Cat</a></button>
            </div>

            <div class="category-card">
                <img src="../Images/second.jpg" alt="Dogs Category" width="400px" height="200px">
                <h2>Dogs</h2>
                <p>Discover various breeds of dogs. From playful puppies to loyal companions.</p>
                <button class="pet-btn"><a href="#">View Dog</a></button>

            </div>

            <div class="category-card">
                <div class="slider"><img class="card-image" src="../Images/third.jpeg"
                        alt="First image Category" width="400px" height="200px">
                    <img class="card-image" src="../Images/fourth.jpeg" alt="Second image Category"
                        width="400px" height="200px">
                </div>
                <script>
                window.onload = function() {
                    // Get all the images in the slider
                    var images = document.querySelectorAll('.slider .card-image');

                    var currentIndex = 0;

                    // Function to display next image
                    function showNextImage() {
                        // Hide all images
                        for (var i = 0; i < images.length; i++) {
                            images[i].style.display = 'none';
                        }

                        // Show the current image
                        images[currentIndex].style.display = 'block';

                        // Increment currentIndex for next image
                        currentIndex++;

                        // If currentIndex exceeds the number of images, reset to 0
                        if (currentIndex >= images.length) {
                            currentIndex = 0;
                        }
                    }

                    // Initial call to display the first image
                    showNextImage();

                    // Set interval to switch images every 3 seconds
                    setInterval(showNextImage, 3000);
                };
                </script>
                <h2>Birds and other</h2>
                <p>Colorful and chirpy birds and other pet animal that will brighten up your home. Explore our avian
                    friends.</p>
                <button class="pet-btn"><a href="#">View Other Pet</a></button>

            </div>

        </div>
        </section>

        <!-- latest Pets -->
        <div class="latest">
            <h3>Latest Pet</h3>
            <div data-aos="fade-up" class="latest_pet">
                <div class="latest_pet_container">
                    <img src="../Images/first.jpg" alt="Cat img" width="200px"><br>
                    <label for="Name">Name:</label>
                    <input type="text" name="" id="pet_name"><br>
                    <label for="color">Color:</label>
                    <input type="text" name="" id="color"><br>
                    <label for="age">Age:</label>
                    <input type="text" name="" id="age"><br>
                    <label for="breed">Breed:</label>
                    <input type="text" name="" id="breed"><br>
                    <label for="health_status">Health Status:</label>
                    <input type="text" name="" id="health_status"><br>
                    <label for="price">Price:</label>
                    <input type="text " name="" id="price"><br>
                    <button class="purchase-btn">Buy</button>
                    <button class="purchase-btn">Add Cart</button>
                </div>
                <div class="latest_pet_container">
                    <img src="../Images/second.jpg" alt="Dog img" width="200px"><br>
                    <label for="Name">Name:</label>
                    <input type="text" name="" id="pet_name"><br>
                    <label for="color">Color:</label>
                    <input type="text" name="" id="color"><br>
                    <label for="age">Age:</label>
                    <input type="text" name="" id="age"><br>
                    <label for="breed">Breed:</label>
                    <input type="text" name="" id="breed"><br>
                    <label for="health_status">Health Status:</label>
                    <input type="text" name="" id="health_status"><br>
                    <label for="price">Price:</label>
                    <input type="text " name="" id="price"><br>
                    <button class="purchase-btn">Buy</button>
                    <button class="purchase-btn">Add Cart</button>


                </div>
                <div class="latest_pet_container">
                    <img src="../Images/third.jpeg" alt="Other pet img" width="200px"><br>
                    <label for="Name">Name:</label>
                    <input type="text" name="" id="pet_name"><br>
                    <label for="color">Color:</label>
                    <input type="text" name="" id="color"><br>
                    <label for="age">Age:</label>
                    <input type="text" name="" id="age"><br>
                    <label for="breed">Breed:</label>
                    <input type="text" name="" id="breed"><br>
                    <label for="health_status">Health Status:</label>
                    <input type="text" name="" id="health_status"><br>
                    <label for="price">Price:</label>
                    <input type="text " name="" id="price"><br>
                    <button class="purchase-btn">Buy</button>
                    <button class="purchase-btn">Add Cart</button>

                </div>
            </div>
        </div>
        <!-- Pet Care Tips -->
        <section class="pet-care-tips">
            <h2>Pet Care Tips</h2>
            <div data-aos="fade-up" class="tips">
                <!-- Display helpful tips on pet care, training, and health -->
                <section class="care-tips">
                    <h3>Care Tips</h3>
                    <ul>
                        <li>Provide a balanced and nutritious diet for your pet.</li>
                        <li>Regularly groom your pet to keep their coat healthy and clean.</li>
                        <li>Ensure your pet has access to fresh water at all times.</li>
                        <li>Create a comfortable and safe living environment for your pet.</li>
                    </ul>
                    <div class="img"><img src="../Images/first.jpg" alt="pet Image"></div>
                </section>

                <!-- Training Tips -->
                <section class="training-tips">
                    <h3>Training Tips</h3>
                    <ul>
                        <li>Use positive reinforcement to encourage good behavior.</li>
                        <li>Be consistent with commands and rewards during training sessions.</li>
                        <li>Patience is key – training takes time and repetition.</li>
                        <li>Seek professional help if you encounter challenges in training.</li>
                    </ul>
                    <div class="img"><img src="../Images/second.jpg" alt="pet Image"></div>

                </section>

                <!-- Health Tips -->
                <section class="health-tips">
                    <h3>Health Tips</h3>
                    <ul>
                        <li>Schedule regular veterinary check-ups for vaccinations and health assessments.</li>
                        <li>Monitor your pet's weight and adjust their diet as needed.</li>
                        <li>Be aware of any changes in behavior, appetite, or activity levels.</li>
                        <li>Keep your pet's living area clean to prevent health issues.</li>
                    </ul>
                    <div class="img"><img src="../Images/third.jpeg" alt="pet Image"></div>

                </section>

            </div>
        </section>

        <!-- Testimonials -->
        <section class="testimonials">
            <h2>What Our Users Say</h2>
            <div data-aos="fade-up" class="testimonial-container">
                <!-- Positive feedback from satisfied users -->
                <!--user 1 feedback  -->
                <blockquote>
                    <p>"I recently adopted a lovely cat through Pet Link. The process was smooth, and the team was
                        very
                        helpful in answering all my questions. My new furry friend brings so much joy to my life!"
                    </p>
                    <cite>- HappyPetOwner123</cite>
                </blockquote>

                <!-- User 2 Feedback -->
                <blockquote>
                    <p>"I highly recommend Pet Link for anyone looking to find a pet. The platform is user-friendly,
                        and
                        I
                        found my perfect dog within a week. The adoption experience was fantastic!"</p>
                    <cite>- DogLover456</cite>
                </blockquote>

                <!-- User 3 Feedback -->
                <blockquote>
                    <p>"The support from Pet Link's customer service was outstanding. They guided me through the
                        adoption
                        process, and I now have a beautiful parrot as a new member of my family. Thank you, Pet
                        Link!"
                    </p>
                    <cite>- BirdWatcher789</cite>
                </blockquote>
            </div>
        </section>


        <!-- News and Updates -->
        <section class="news-updates">
            <h2>News and Updates</h2>
            <div data-aos="fade-up" class="blog-posts">
                <!-- Individual Blog Post 1 -->
                <div class="blog-post">
                    <h3>Exciting Platform Update!</h3>
                    <p>Learn about our latest features and improvements to enhance your experience on Pet Link.</p>
                    <img data-aos="fade-up" src="../Images/platform-update.jpeg" alt="Image1" class="img">
                </div>

                <!-- Individual Blog Post 2 -->
                <div class="blog-post">
                    <h3>Meet Our New Team Members</h3>
                    <p>Discover the faces behind Pet Link and our shared passion for connecting pet lovers.</p>
                    <img data-aos="fade-up" src="../Images/jiban.png" alt="Image1" class="img">
                </div>

                <!-- Individual Blog Post 3 -->
                <div class="blog-post">
                    <h3>Upcoming Events</h3>
                    <p>Stay tuned for exciting pet-related events happening in your area and join the fun!</p>
                    <img data-aos="fade-up" src="../Images/update.jpeg" alt="Image1" class="img">
                </div>

                <!-- Add more blog posts as needed -->
                <div class="blog-post">
                    <h3>Important Pet Care Tips</h3>
                    <p>Check out our latest blog post for essential tips on caring for your furry friends.</p>
                    <img data-aos="fade-up" src="../Images/pet-care.jpeg" alt="Image1" class="img">
                </div>

                <div class="blog-post">
                    <h3>Adoption Success Stories</h3>
                    <p>Read heartwarming stories about pets finding their forever homes through Pet Link.</p>

                    <img data-aos="fade-up" src="../Images/sushant.jpg" alt="Image1" class="img">
                </div>

            </div>
        </section>
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
                <a href="www.facebook.com"><img src="../Images/facebook-circle-logo-24.png"
                        alt="Facebook Logo"></a>
                <a href="www.instagram.com"><img src="../Images/instagram-alt-logo-24.png"
                        alt="instagram Logo"></a>
                <a href="www.twitter.com"><img src="../Images/twitter-logo-24.png" alt="twitter Logo"></a>
                <a href="www.youtube.com"><img src="../Images/youtube-logo-24.png" alt="youtube Logo"></a>
            </div>
            <div class="quick-link">
                <div class="footer-header">Quick link</div>
                <a href="../Code/purchase.php">Pet</a>
                <a href="../Code/seller.php">Become a seller</a>
                <a href="">About</a>
                <a href="">Help & Support</a>
                <a href="">Login</a>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init();
    });
    </script>
</body>

</html>