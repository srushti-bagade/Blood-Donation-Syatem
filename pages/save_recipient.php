<?php
include('../db/db_connect.php');

$name = $_POST['name'];
$age = $_POST['age'];
$blood_group = $_POST['blood_group'];
$contact = $_POST['contact'];
$email = $_POST['email'];

$sql = "INSERT INTO recipients (name, age, blood_group, contact, email)
        VALUES ('$name', $age, '$blood_group', '$contact', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Recipient added successfully!'); window.location.href='add_recipient.html';</script>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
