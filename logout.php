<?php
    session_start();
    unset($_SESSION["counter"]);
    echo "counter登出成功....";
    echo "<meta http-equiv=REFRESH content='2; url=counter.php'>";

?>