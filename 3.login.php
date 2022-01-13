<?php 
    if (($_POST[id] == "john") && ($_POST[pwd]=="john1234"))//帳號john//密碼john1234
        echo "Welcome";//歡迎
    else
        echo "fail login";//登入失敗
?>
