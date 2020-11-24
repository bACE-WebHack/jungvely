<?php
session_start();
if(isset($_SESSION['id'])){
    //setcookie('login_cookie', $id, time()-3600*24, '/');
    session_destroy();
}
?>
        로그아웃되었습니다.
        <br>
        <button type="button" 
        onclick="location.href='./main.php';"
        >홈으로</button>
        <br>
        <button type="button" 
        onclick="location.href='./login.php';"
        >로그인하러가기</button>