<html>
    <head><title>使用者管理</title></head>
    <body>
    <?php
        error_reporting(0);
        session_start();
        if (!$_SESSION["id"]) {
            echo "請登入帳號";//顯示登入帳號
            echo "<meta http-equiv=REFRESH content='3, url=login.html'>";//自動跳轉網頁
        }
        else{   //使用者介面
            echo "<h1>使用者管理</h1>
            [<a href=user_add_form.php>新增使用者</a>][<a href=bulletin.php>回佈告欄列表</a>]<br>
                <table border=1>
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";
            
            $conn=mysqli_connect("localhost","root","","mydb");// 執行查詢
            $result=mysqli_query($conn, "select * from user");//執行針對資料庫的查詢
            while ($row=mysqli_fetch_array($result)){//該函數接受上述和以下描述的兩個參數
                echo "<tr><td><a href=user_edit_form.php?id={$row['id']}>修改</a>||<a href=user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
            }
            echo "</table>";//返回首頁
        }
    ?> 
    </body>
</html>