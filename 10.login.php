<?php 
    echo $_POST["id"];
    echo "<br>";
    echo $_POST["pwd"];


    $login=FALSE
    while ($row=mysqli_fetch_array)($result)){
        if(($_POST["id"]==$row["id"])&&($_POST["pwd"]==$row["pwd"])){
            $login=TRUE
        }
    }
    if($login==TRUE){
        session_start();
        $_SESSION["id"]=&_post["id"];
        echo "WELCOME!!";
        echo"<meta http-equiv=REFRESH content='3, url=bulletin.php>"
    }
    else{
        echo "id/pwd wrong!!";
        echo"<meta http-equiv=REFRESH content='3, url=bulletin.php>"
    }
?>
