<?php
include('../db/db_connect.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Recipients</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h2>Registered Blood Recipients</h2>
        <div class="table-container">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Blood Group</th>
                    <th>Contact</th>
                    <th>Email</th>
                </tr>
                <?php
                $result = $conn->query("SELECT * FROM recipients");
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['age']}</td>
                            <td>{$row['blood_group']}</td>
                            <td>{$row['contact']}</td>
                            <td>{$row['email']}</td>
                          </tr>";
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
