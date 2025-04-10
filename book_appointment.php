<?php
include 'db.php';

$patient_name = $_POST['patient'];
$doctor_name = $_POST['doctor'];
$date = $_POST['date'];
$time = $_POST['time'];

$sql = "INSERT INTO appointments (patient_name, doctor_name, date, time)
        VALUES ('$patient_name', '$doctor_name', '$date', '$time')";

if ($conn->query($sql)) {
  echo "Appointment booked successfully!";
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>

