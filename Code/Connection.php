
<?php

$serverName = "localhost";
$username = "root";
$password = "";
$dbname = "pet_details";

$conn = mysqli_connect($serverName, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
