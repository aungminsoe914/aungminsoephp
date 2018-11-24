<?php
$p="123456";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO user (username, email,password)
VALUES ( 'Moe soe', 'doe@gmail.com','$p')";

if (mysqli_query($conn, $sql)) {
    echo "Insert successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>