 <?php
$shutup = "localhost";
$user = "root";
$password = "";
$dbname = "ngl";

$conn = new mysqli($shutup, $user, $password, $dbname);

if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
} else {
    echo "Connection successful<br>";
}



?>