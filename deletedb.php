<?php
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

$sql = "Delete from user Where username='Ma Ma'";
$result=mysqli_query($conn, $sql);
if ($result>0) 
{
    echo " Delete successfully";
} else {
    echo "Delete Fail";
}

mysqli_close($conn);
?>

