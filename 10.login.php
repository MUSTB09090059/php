<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("localhost","root","","mydb");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;
     }
   } 
   if ($login==TRUE) {
    session_start();//請輸入
    $_SESSION["id"]=$_POST["id"];//輸入帳號密碼
    echo "welcome!!";//歡迎
    echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";
   }

  else{
    echo "id/pwd wrong!!";//帳號密碼錯誤
    echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
  }
?>