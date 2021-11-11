<?php
    session_start();//開始
    unset($_SESSION["id"]);//輸入id
    echo "登出成功....";//登出成功
    echo "<meta http-equiv=REFRESH content='3; url=login.html'>";//跳轉網址

?>