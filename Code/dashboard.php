<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../Style/dashboard.css">
</head>
<body>

    <div class="dashboard">
        <div class="logo">
            <img src="../photos/logo1.png" alt="Logo">
        </div>
        <div class="nav-links">
           
            <a href="home1.html">Home</a>
            <a href="#about-us">About Us</a>
            <a href="#contact-us">Contact Us</a> 
            <input type="text" name="" id="find" placeholder="Search here...." onkeyup="search()">

        </div>
        <div class="action-buttons">
           <a href="adminLogin.php"><button class="admin-button">Admin</button></a> 
            <button class="adoption-register-button">Adoption Register</button>
        </div>
    </div>

    <div class="pet-list">
       
        <div class="pet-row">
            <?php
            include("connection.php");
            error_reporting(0);

            $query = "SELECT * FROM pets";
            $data = mysqli_query($conn, $query);
            $total = mysqli_num_rows($data);

            if ($total != 0) {
                while ($result = mysqli_fetch_assoc($data)) {
                    echo "
                    <div class='pet-card'>
                        <img class='pet-photo' src='".$result['photo_path']."' alt='".$result['name']."'>
                        <h3>Name: ".$result['name']."</h3>
                        <p>Age: ".$result['age']."</p>
                        <p>Breed: ".$result['breed']."</p>
                        <p>Size: ".$result['size']."</p>
                        <p>Height: ".$result['height']."</p>
                        <p>Role: ".$result['role']."</p>
                        <p>Description: ".$result['description']."</p>
                    </div>";
                }
            } else {
                echo "No pets found in the database.";
            }
            mysqli_close($conn);
            ?>
        </div>
    </div>

    <footer>
        <div class="Footer_link">&copy; Pet link <br>Contact us: petlinks@gmail.com | Phone: +977986XXXXXX </div>
        <div class="social-icons">
            <a href="https://www.facebook.com/petlink" target="_blank"><img src="facebook-logo.png" alt="Facebook"></a>
            <a href="https://www.instagram.com/petlink" target="_blank"><img src="instagram-logo.png" alt="Instagram"></a>
            <a href="https://twitter.com/petlink" target="_blank"><img src="twitter-logo.png" alt="Twitter"></a>
            <a href="https://www.youtube.com/petlink" target="_blank"><img src="youtube-logo.png" alt="YouTube"></a>
            
        </div>
    </footer>
    <!-- <script type="text/javascript">
        function search() {
        let filter = document.getElementById('find').value.toUpperCase();
        let item = document.querySelectorAll('.pet-card');
        let l = document.getElementsByTagName('h3');
        for(var i = 0;i<=l.length;i++){
        let a=item[i].getElementsByTagName('h3')[0];
        let value=a.innerHTML || a.innerText || a.textContent;
        if(value.toUpperCase().indexOf(filter) > -1) {
        item[i].style.display="";
        }
        else
        {
        item[i].style.display="none";
        }
        }
        }
        </script> -->

</body>
</html>
