<?php
session_start();
if(isset($_POST['submit'])){
    $host = "localhost";
    $username = "web";
    $password = "web";
    $db = "web";

    $conn = new mysqli($host, $username, $password, $db);
    $result = $conn->query("insert into board values (NULL,'$_POST[title]', '$_POST[writer]', '$_POST[contents]');");
    $conn->close();

    if($result == false){
        echo "오류";
    }else{
        echo "글쓰기 성공\n";
        ?>
        <button type="button" 
        onclick="location.href='./main_board.php';"
    >   이전으로</button>
        <?php
    }
}
        ?>

<form action="./write.php" method="POST"> 
    Title : <input  name="title">
    <br>
    Writer: <input  name="writer">
    <br>
    Contents: <input  name="contents">
    <br>
    <input type="submit" name="submit">
</form>