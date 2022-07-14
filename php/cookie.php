<?php
setcookie('user','development');
?>
<html>

    <body>
        <?php
        if(!isset($_COOKIE['user'])){
            echo"sory cookie is not found";
        }
        else{
            echo"Cookie is"." ".$_COOKIE['user'];
        }
        ;?>
    </body>

</html>