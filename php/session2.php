<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>session</title>
    </head>

    <body>
        <?php
    echo"The interactive language is"." ".$_SESSION['user'];
    ?>
        <a href="session_counter.php">counter</a>
    </body>

</html>