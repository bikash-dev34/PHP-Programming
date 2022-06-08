<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Types</title>
    </head>

    <body>
        <h2>Data Types in PHP</h2>
        <?php
         $x="String"; //string
         $x1=121; // integer
         $x2=1.23 ;//float or double
         $x3="";
         echo $x."<br>";
         echo "$x1 and $x2<br>";
         if($x3){
             echo"It has value";
         }else{
             echo "It has not value";//output 
         }
         //var_dump($x); // It is used for to know data types and length 
         ?>
        <h2>array types</h2>
        <?php
          $languages=array('PHP','Python','Java','C++');
        //   echo"<pre>";
        //   print_r($languages);
          echo $languages[2];
           ?>
        <h2>Null data types</h2>
        <?php
           $x4=null;
           echo"<br><hr>";
           var_dump($x4);
           echo"<br><hr>";
            
        ?>
    </body>

</html>