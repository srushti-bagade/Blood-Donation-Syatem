<?php
include('../db/db_connect.php');

$donor_id = $_POST['donor_id'];
$donation_date = $_POST['donation_date'];
$location = $_POST['location'];
$status = $_POST['status'];

$sql = "INSERT INTO donations (donor_id, donation_date, location, status)
        VALUES ($donor_id, '$donation_date', '$location', '$status')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Donation logged successfully!'); window.location.href='add_donation.html';</script>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
