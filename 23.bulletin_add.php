<?php
    error_reporting(0);//函式規定報告哪個錯誤
    session_start();
    if (!$_SESSION["id"]) {
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";//自動跳轉網頁
    }
    else{
        $conn=mysqli_connect("localhost","root","", "mydb");// 執行查詢
        $sql="insert into bulletin(title, content, type, time) 
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')";
        if (!mysqli_query($conn, $sql)){
            echo "新增命令錯誤";//顯示新增指令錯誤
        }
        else{
            echo "新增佈告成功，三秒鐘後回到網頁";//顯示新增佈告成功，三秒鐘後回到網頁
            echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";//自動跳轉網頁
        }
    }
?>
