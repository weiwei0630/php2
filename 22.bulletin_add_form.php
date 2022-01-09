<html>
    <head><title>新增布告</title></head>
    <body>
        <form method=post action="bulletin_add.php"></form>
        標題:<input type=text name=title><br>
        內容:<br><textarea name=content row=20 cols=20><textarea>
            布告內容:<input type=radio name=type value=1 >系上公告
                    <input type=radio name=type value=2 >獲獎資訊
                    <input type=radio name=type value=3 >徵才資訊<br>
            發布時間:<input type=date name=time  ><p></p>
            <input type=sumbit value=新增布告> < <input type=rest value=清除>
    </body>
</html>