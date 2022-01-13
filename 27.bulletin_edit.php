<?php

    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
    }
    else{   
        $conn=mysqli_connect("localhost","root","","mydb");//執行查詢
        if (!mysqli_query($conn, "update bulletin set title='{$_POST['title']}',content='{$_POST['content']}',time='{$_POST['time']}',type={$_POST['type']} where bid='{$_POST['bid']}'")){
            echo "修改錯誤";//顯示修改錯誤
            echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";//自動跳轉網頁
        }else{
            echo "修改成功，三秒鐘後回到佈告欄列表";//顯示修改成功，三秒鐘後回到佈告欄
            echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";//自動跳轉網頁
        }
    }

?>