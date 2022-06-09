<?php 
define("hello","He said to her ,good morning madam!");
echo hello;

echo "<h2> Array Constants</h2>";
define("rivers",['Bagmati','Bishnumati','Koshi','Karnali']);
echo rivers[2];
echo"The river called"." ".rivers[1]."flows in Kathmandu";
   
echo "<br><h2>Constants are global</h2>";
function nameOfRiver(){
    echo rivers[3];
}
nameOfRiver();

?>