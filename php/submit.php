<?php
$mysqli = new mysqli("mysql", "root", "root", "testdb");

if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];

$stmt = $mysqli->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
$stmt->bind_param("ss", $name, $email);
$stmt->execute();

echo "✅ User added successfully.";
?>
