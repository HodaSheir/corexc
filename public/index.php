<?php 
    require_once 'endpoint.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Corexc</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Hotel Name</th>
                <th>Room Name</th>
                <th>Room Code</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data as $row) {
                echo "<tr>";
                echo "<td>" . $row['hotel_name'] . "</td>";
                echo "<td>" . $row['room_name'] . "</td>";
                echo "<td>" . $row['room_code'] . "</td>";
                echo "<td>" . $row['total'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
