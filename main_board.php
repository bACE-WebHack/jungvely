<?php
session_start();
$host = "localhost";
$username = "web";
$password = "web";
$db = "web";

$conn = new mysqli($host, $username, $password, $db);
$result = $conn->query("select * from board;")->fetch_all();
$conn->close();

if(!isset($_SESSION['id'])){
    echo "로그인이 되어있지 않습니다.";
    var_dump($_SESSION);
?>
<!DOCTYPE html>
        <br>
        <button type="button" 
        onclick="location.href='./main.php';"
        >홈으로</button>
        <br>
        <button type="button" 
        onclick="location.href='./login.php';"
        >로그인하러가기</button>
        <br>
        아직회원이 아니신가요?
        <button type="button" 
        onclick="location.href='./join.php';"
        >회원가입</button>
    </html>
<?php
}if(isset($_SESSION['id'])){
    echo '게시판';
    ?>
    <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
        <br>
        <button type="button" 
        onclick="location.href='./write.php';"
        >글쓰기</button>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm">
        <table class="table table-bordered">
        <tr>
            <td scope="col">No</td>
            <td scope="col">Title</td>
            <td scope="col">Writer</td>
        
        </tr>

        <?php
            foreach ($result as $key => $row) {
                echo "<tr>\n";
                echo "<td>$row[0]</td>\n";
                echo "<td>$row[1]</td>\n";
                echo "<td>$row[2]</td>\n";
                echo "<tr>\n";
            }
         ?>
        </table>
    </div>
    </div>
</div>
</body>
</html>
    <?php
}
?>