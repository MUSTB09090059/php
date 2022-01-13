<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";//請登入帳號
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";//自動跳轉網頁
    }
    else{   
        $conn=mysqli_connect("localhost","root","","mydb");
        $sql="delete from user where id='{$_GET[id]}'";//刪除使用者
        #echo $sql;
        if (!mysqli_query($conn,$sql)){
            echo "使用者刪除錯誤";//顯示使用者刪除錯誤
        }else{
            echo "使用者刪除成功";//顯示使用者刪除成功
        }
        echo "<meta http-equiv=REFRESH content='3, url=user.php'>";//自動跳轉網頁
    }
?>