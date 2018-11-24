 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE Myuts (
userid INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,

username VARCHAR(30) NOT NULL,
password VARCHAR(50) NOT NULL,
age INT(3)NULL,

reg_date TIMESTAMP
)";
$result=mysqli_query($conn, $sql);
if (!$result) {
    echo"Error creating table: " . mysqli_error($conn);} 
   else 
    echo  "Table MyGuests created successfully";

	$sql = "INSERT INTO  Myuts (
username,password,age)
VALUES ('John', '345', );";
$sql .= "INSERT INTO  Myuts (username,password,age)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO  Myuts (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";

if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



mysqli_close($conn);
?>
