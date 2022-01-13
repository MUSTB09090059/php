<?php

    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";//顯示請登入帳號
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";//自動跳轉網頁
    }
    else{   
        $conn=mysqli_connect("localhost","root","","mydb");//函數打開一個到MySQL 服務器的新的連接
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){
            echo "修改錯誤";//顯示修改錯誤
            echo "<meta http-equiv=REFRESH content='3, url=user.php'>";//自動跳轉網頁
        }else{
            echo "修改成功，三秒鐘後回到網頁";//顯示修改成功
            echo "<meta http-equiv=REFRESH content='3, url=user.php'>";//自動跳轉網頁
        }
    }

?>