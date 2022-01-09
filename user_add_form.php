<html>
    <head><title>新增使用者</title></head>
    <body>
<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, ur1=login.html'>";
    }
    else{
        echo"
        <form action=user_add php method=post>
            <input type=text name=id><br>
            <input type=text name=pwd><p></p>
            <input type=submit value=新增><input type=reset value=清除>
       </form>
     ";
   }
?>
   </body>
</html>