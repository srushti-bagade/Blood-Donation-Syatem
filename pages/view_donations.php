<?php
include('../db/db_connect.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Donations</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h2>All Blood Donations</h2>
        <div class="table-container">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Donor ID</th>
                    <th>Date</th>
                    <th>Location</th>
                    <th>Status</th>
                </tr>
                <?php
                $result = $conn->query("SELECT * FROM donations");
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['donor_id']}</td>
                            <td>{$row['donation_date']}</td>
                            <td>{$row['location']}</td>
                            <td>{$row['status']}</td>
                          </tr>";
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
