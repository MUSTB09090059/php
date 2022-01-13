<html>
    <head><title>修改使用者</title></head>
    <body>
    <?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";//請登入帳號
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
    }
    else{   
        $conn=mysqli_connect("localhost", "root","","mydb");//函數打開一個到MySQL 服務器的新的連接
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'");//執行針對數據庫的查詢
        $row=mysqli_fetch_array($result);//該函數接受上述和以下描述的兩個參數
        echo "
        <form method=post action=user_edit.php>
            <input type=hidden name=id value={$row['id']}>
            帳號：{$row['id']}<br> 
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>
            <input type=submit value=修改>
        </form>
        ";
    }
    ?>
    </body>
</html>