<?php
include 'db.php';

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$history = $_POST['history'];

$sql = "INSERT INTO patients (name, age, gender, history) VALUES ('$name', '$age', '$gender', '$history')";

if ($conn->query($sql)) {
  echo "Patient registered successfully!";
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>
