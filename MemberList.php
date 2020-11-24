<?php
session_start();
    $host = "localhost";
    $username = "web";
    $password = "web";
    $db = "web";

    $conn = new mysqli($host, $username, $password, $db);
    $result = $conn->query("select * from user;")->fetch_all();
    $conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm">
        <table class="table table-bordered">
        <tr>
            <td scope="col">ID</td>
            <td scope="col">Password</td>
        </tr>

        <?php
            foreach ($result as $key => $row) {
                echo "<tr>\n";
                echo "<td>$row[0]</td>\n";
                echo "<td>$row[1]</td>\n";
                echo "<tr>\n";
            }
         ?>
        </table>
    </div>
    </div>
</div>
</body>
</html>