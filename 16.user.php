<html>
    <head><title>使用者管理</title></head>
    <body>
    <?php
        error_reporting(0);
        session_start();
        if (!$_SESSION["id"]) {
            echo "請登入帳號";//顯示請登入帳號
            echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
        }
        else{   
            echo "<h1>使用者管理</h1>
                [<a href=bulletin.php>回佈告欄列表</a>]<br>
                <table border=1>
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";
            
            $conn=mysqli_connect("localhost","root","","mydb");//函數打開一個到MySQL 服務器的新的連接
            $result=mysqli_query($conn, "select * from user");
            while ($row=mysqli_fetch_array($result)){
                echo "<tr><td><a href=user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
            }
            echo "</table>";//返回首頁
        }
    ?> 
    </body>
</html>