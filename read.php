<?php
include 's.php';


$sql = "SELECT * FROM gl "  ;
$result = $conn -> query($sql);


  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Name: " . $row['name'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
        echo "Password: " . $row['password'] . "<br><br>";
    }
} else {
    echo "No data found";
}

?>