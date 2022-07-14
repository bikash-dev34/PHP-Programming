<?php 
$x=4;
$y=6;
$msg="Hello php world";
echo"It is the way". $msg.$x."<br>";
echo"hello";
echo "<br>";?>
<?php 
// local variable scope
function loc_var(){
    $loc="Hello World";
    echo"It is said to "." ".$loc."<br>";
}
loc_var();

// scope of global variable
function gloval_var(){
    global $msg;
    echo"First program"." ".$msg."<br>";
    $num=$GLOBALS['x']+$GLOBALS['y'];
    echo"the sum is "."".$num."<br>";

}
gloval_var();
// static variavble
function static_var(){
    static $num1=4;
    $num2=8;
    $num1++;
    $num2++;
    echo"static is ".$num1."<br>";
    echo"non static".$num2."<br>";
}
static_var();
static_var();

// constants
define("messageme","Hello php constants");
echo messageme;
echo __FILE__."<br>";
echo __DIR__;