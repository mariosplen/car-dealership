<?php
$host = 'db';
$user = 'root';
$pass = 'root';
$conn = new mysqli($host, $user, $pass, "dealership");
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
} else{
  
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $number = $_POST['number'];

    $sql = "INSERT INTO Category (Name, Number_Of) VALUES ('$name', $number)";

    if ($conn->query($sql) === TRUE) {
        header('Location: / ');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


?>