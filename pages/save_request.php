<?php
include('../db/db_connect.php');

$recipient_id = $_POST['recipient_id'];
$request_date = $_POST['request_date'];
$hospital = $_POST['hospital'];
$status = $_POST['status'];

$sql = "INSERT INTO requests (recipient_id, request_date, hospital, status)
        VALUES ($recipient_id, '$request_date', '$hospital', '$status')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Blood request submitted!'); window.location.href='request_blood.html';</script>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
