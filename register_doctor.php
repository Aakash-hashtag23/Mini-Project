<?php
include 'db.php';

$name = $_POST['name'];
$specialization = $_POST['specialization'];
$contact = $_POST['contact'];

$sql = "INSERT INTO doctors (name, specialization, contact) VALUES ('$name', '$specialization', '$contact')";

if ($conn->query($sql)) {
  echo "Doctor registered successfully!";
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>
