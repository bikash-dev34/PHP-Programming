<?php
session_start();
?>
<html>

    <body>
        <?php
    $_SESSION['user']='Javascript';
    echo"Session variables are successfullu set<br>";

    ;?>
        <a href="session2.php">See Page</a>
    </body>

</html>