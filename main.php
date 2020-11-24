<?php
$host = "localhost";
$username = "web";
$password = "web";
$db = "web";

$conn = new mysqli($host, $username, $password, $db);
$result = $conn->query("select * from user;")->fetch_all();

$conn->close();

?>
<?php 
session_start();
echo "세션값 : ";
var_dump($_SESSION);
?>
<!DOCTYPE html>

<button type="button" 
onclick="location.href='./join.php';"
>회원가입</button>
<button type="button" 
onclick="location.href='./login.php';"
>로그인</button>
<button type="button" 
onclick="location.href='./main_board.php';"
>게시글</button>
<button type="button" 
onclick="location.href='./logout.php';"
>로그아웃</button>
</html>