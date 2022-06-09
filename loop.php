<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>loop</title>
    </head>

    <body>
        <h2>loops</h2>
        <?php 
    $x=1;
    while($x<=10){
        echo "<br>The number is ".$x."<br>";
        $x++;
    }
    echo"<hr>do while<br>";
    do{
        echo "The number is $x";
        $x--;
    }while($x<=5); //now loop ends as its value is 10 which is greater than 5

    echo"<hr>for loop<br>";
    for($x=0;$x<=50;$x+=5){
        echo $x;
    }
    ?>

        <hr>foreach loop<br>
        <?php 
        $p=array('papers','juice',345,'apple');
        foreach($p as $y){
            echo$y."<br>";
        }
        $items= array('apple'=>233,"mango"=>121,"orange"=>56);
        foreach($items as $item=>$price){
            echo"$item=$price";
            echo"<br>";
        }
        ?>

    </body>

</html>