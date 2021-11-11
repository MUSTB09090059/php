<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "please login first";//請登入
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";//跳轉網址
    }
    else{
        echo "Welcome, ".$_SESSION["id"]."[<a href=logout.php>logout</a>]<br>";//請輸入id
        $conn=mysqli_connect("localhost","root","", "mydb");//主機抓資料
        $result=mysqli_query($conn, "select * from bulletin");//公告
        echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
        while ($row=mysqli_fetch_array($result)){
            echo "<tr><td>";
            echo $row["bid"];
            echo "</td><td>";
            echo $row["type"];
            echo "</td><td>"; 
            echo $row["title"];
            echo "</td><td>";
            echo $row["content"]; 
            echo "</td><td>";
            echo $row["time"];
            echo "</td></tr>";
        }
        echo "</table>";
    
    }

?>
