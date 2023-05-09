<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kelompok1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind statement
$stmt = $conn->prepare("INSERT INTO pembeli (name, email, number, how_much, your_order, address) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $name, $email, $number, $how_much, $your_order, $address);

// Set parameters and execute
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$how_much = $_POST['how_much'];
$your_order = $_POST['your_order'];
$address = $_POST['address'];

$stmt->execute();

echo "New record created successfully";

$stmt->close();
$conn->close();
?>
