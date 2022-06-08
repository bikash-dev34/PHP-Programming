<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Variables</title>
    </head>

    <body>
        <h2>Variables</h2>
        <?php
        $str="hello Bikash ";
        $str1="software engineer";
        $num=43;
        $num1=3.234;
        echo"He said to me $str and the numbers are $num and $num1<br>";
        echo"<h2>She is ".$str1."</h2>";
        echo"<hr><br>";
        ?>
        <?php
         $x1=5;
         $x2=4.5;
         $x=$x1+$x2;
         echo"The sum of $x1 and $x2 is $x <br>";
         echo"<hr><br>";
         function localVar(){
             $num=12345;
             echo "<h3> The local variable declare inside the function is".$num."</h3><br>";
         }
           localVar();
           echo"<h2> Global variable scope</h2>";
           $name="Bikash Rai";
           function myName(){
               global $name;
               echo"My name is $name <br>";
           }
           myName();


          echo"<hr><br>";
          echo"<h2> Static  variable scope</h2>";
           function testCount(){
           static $x=1;
           echo $x;
           $x++;
           }
           testCount();
           echo"<br>";
           testCount();
         ?>
        <?php  
 
        ?>
    </body>

</html>