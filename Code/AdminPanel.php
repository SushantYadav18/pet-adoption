<?php
session_start();

include("Connection.php");
$message = []; // Initialize the message array

if (isset($_POST['add_Pet'])) {
   

    $pet_name = $_POST['name'];
    $pet_age = $_POST['age'];

    $pet_image = $_FILES['image']['name'];
    $pet_image_tmp_name = $_FILES['image']['tmp_name'];
    $pet_image_folder = 'uploaded_img/' . $pet_image;

    // Additional fields for pet details
    $breed = $_POST['breed'];
    $size = $_POST['size'];
    $health = $_POST['health'];
    $description = $_POST['description'];
    $role = $_POST['role'];

    if (empty($pet_name) || empty($pet_age) || empty($pet_image) || empty($breed) || empty($size) || empty($health) || empty($description) || empty($role)) {
        $message[] = 'Please fill out all fields';

    } else {
        $insert = "INSERT INTO pets (name, age, image, breed, size, health_status, description, role) VALUES ('$pet_name', '$pet_age', '$pet_image', '$breed', '$size', '$health', '$description', '$role')";

        $upload = mysqli_query($conn, $insert);
        if ($upload) {
            move_uploaded_file($pet_image_tmp_name, $pet_image_folder);
            $message[] = 'New Pet added successfully';
        } else {
            $message[] = 'Could not add the pet';
        }
    }
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete_query = "DELETE FROM pets WHERE id = $id";
    if (mysqli_query($conn, $delete_query)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../Style/sell.css">
    <link rel="stylesheet" href="../Style/adminPanel.css">
</head>

<body>

    <div class="header">
        <div class="header_Wapper">
            <h1>Welcome to the Admin Panel</h1>
            <a href="../Code/seller.php" class="seller">seller</a>
            <p>You are logged in as: <?php echo $_SESSION['AdminLoginId']; ?></p>
            <form action="logout.php" method="post">
                <a href="MainPage.php"><button type="submit" name="logout">Logout</button></a>
            </form>
        </div>
    </div>

    <div class="form-container">
        <p class="title">Add New Pet</p>
        <form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
            <div class="input-group">
                <label for="image">Select image and video:</label>
                <input type="file" name="image" id="image" accept="image/*, video/*" multiple required>
            </div>
            <div class="input-group">
                <label for="name">Pet Name:</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="input-group">
                <label for="age">Pet Age:</label>
                <input type="number" name="age" id="age" required>
            </div>
            <div class="input-group">
                <label for="breed">Breed:</label>
                <input type="text" name="breed" id="breed" required>
            </div>
            <div class="input-group">
                <label for="size">Size:</label>
                <input type="text" name="size" id="size" required>
            </div>
            <div class="input-group">
                <label for="health">Health Status:</label>
                <input type="text" name="health" id="health" required>
            </div>
            <div class="input-group">
                <label for="description">Description about pet:</label>
                <textarea class="inputgroup" name="description" id="description" rows="5" required>Description</textarea>
            </div>
            <div class="role-select">
                <label for="role">Select Role:</label>
                <select name="role" id="role">
                    <option value="Cat">Cat</option>
                    <option value="Dog">Dog</option>
                    <option value="Birds & Other">Other</option>
                </select>
            </div>
            <div class="pet-submit">
                <button type="submit" name="add_Pet">Submit</button>
                <button class="cancel" type="cancel"><a href="../MainPage.php">Cancel</a></button>
            </div>
        </form>
    </div>

</body>

</html>
