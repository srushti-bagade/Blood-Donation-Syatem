<?php
include('../db/db_connect.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Blood Requests</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h2>Blood Requests</h2>
        <div class="table-container">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Recipient ID</th>
                    <th>Request Date</th>
                    <th>Hospital</th>
                    <th>Status</th>
                </tr>
                <?php
                $result = $conn->query("SELECT * FROM requests");
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['recipient_id']}</td>
                            <td>{$row['request_date']}</td>
                            <td>{$row['hospital']}</td>
                            <td>{$row['status']}</td>
                          </tr>";
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
