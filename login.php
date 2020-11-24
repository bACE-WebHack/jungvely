<?php
session_start();
if(isset($_SESSION['id'])){
    echo " 로그인 중입니다."
    ?>
    <button type="button" 
    onclick="location.href='./main.php';"
    >홈으로</button>
    <button type="button" 
    onclick="location.href='./logout.php';"
    >로그아웃</button>
<?php
}
if(!isset($_SESSION['id'])){
    if(isset($_POST['login'])){
    $host = "localhost";
    $username = "web";
    $password = "web";
    $db = "web";

    $conn = new mysqli($host, $username, $password, $db);
    $id = addslashes($_POST['id']);
    $pw = addslashes($_POST['pw']);
    $result = $conn->query("select * from user where id = '{$id}' and pw = '{$pw}';" )->fetch_array(MYSQLI_ASSOC);
    $conn->close();

    if($result == false){
        echo "로그인 실패";
    }else{
        echo "로그인 성공";      
         
        $_SESSION['id'] = $id;
        var_dump($_SESSION);
        ?>
        <br>
        <button type="button" 
        onclick="location.href='./main.php';"
        >홈으로</button>
        <br>
        <button type="button" 
        onclick="location.href='./main_board.php';"
        >게시글</button>
        <br>
        <button type="button" 
        onclick="location.href='./logout.php';"
        >로그아웃</button>
        <?php
    }
}   else{
    ?>
<form action="./login.php" method="POST"> 
    로그인<br>
    ID: <input type=text  name="id">
    Password: <input type=password name="pw">
    <input type="submit" name="login">
    <br>
    회원이 아니신가요?
    <button type="button" 
        onclick="location.href='./join.php';"
        >회원가입 하러 가기</button>
</form>
<?php
}
}
?>