<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {//儲存於伺服器端帳號
        echo "please login first";//請先登入
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";//自動跳轉網頁
    }
    else{//網頁內容
        echo "
        <html>
            <head><title>新增佈告</title></head>
            <body>
                <form method=post action=bulletin_add.php>
                    標    題：<input type=text name=title><br>
                    內    容：<br><textarea name=content rows=20 cols=20></textarea><br>
                    佈告類型：<input type=radio name=type value=1>系上公告 
                            <input type=radio name=type value=2>獲獎資訊
                            <input type=radio name=type value=3>徵才資訊<br>
                    發布時間：<input type=date name=time><p></p>
                    <input type=submit value=新增佈告> <input type=reset value=清除>
                </form>
            </body>
        </html>
        ";
    }
?>