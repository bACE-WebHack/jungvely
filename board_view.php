<?php
session_start();
if(isset($_GET['no'])){
$host = "localhost";
$username = "web";
$password = "web";
$db = "web";

$conn = new mysqli($host, $username, $password, $db);
$post = $conn->query("select * from board where no = '$_GET[no]';")->fetch_object();
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
            <td scope="col"><?php echo "$post->no"?></td>
        </tr>
        <tr>
            <td scope="col">Title</td>
            <td scope="col"><?php echo "$post->title"?></td>
        </tr>
        <tr>
            <td scope="col">Writer</td>
            <td scope="col"><?php echo "$post->writer"?></td>       
        </tr>
        <tr>
            <td scope="col">Contents</td>
            <td scope="col"><?php echo "$post->contents"?></td>
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
