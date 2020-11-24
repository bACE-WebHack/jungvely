<?php
session_start();
if(isset($_GET['no'])){
$host = "localhost";
$username = "web";
$password = "web";
$db = "web";

$conn = new mysqli($host, $username, $password, $db);
$result = $conn->query("select * from board where no = '$_GET[no]';")->fetch_array();
$conn->close();
}
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
            <td scope="col">No</td>
            <?php
            foreach ($result as $key => $row) {
                echo "$row[0]\n";
            }
            ?>
        </tr>
        <tr>
            <td scope="col">Title</td>
            <?php
            foreach ($result as $key => $row) {
                echo "$row[1]\n";
            }
            ?>
        </tr>
        <tr>
            <td scope="col">Writer</td>
            <?php
            foreach ($result as $key => $row) {
                echo "$row[2]\n";
            }
            ?>
        </tr>
        <tr>
            <td scope="col">Contents</td>
            <?php
            foreach ($result as $key => $row) {
                echo "$row[3]\n";
            }
            ?>
        </tr>
        </table>
    </div>
    </div>
</div>
    <br>
        <button type="button" 
        onclick="location.href='./main.php';"
        >홈으로</button>
</body>
</html>
