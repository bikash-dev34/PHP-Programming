<?php
function greeting(){
    echo"Hello php world";
}
greeting();

// single argument
function namePerson($name){
    echo " The name of person is ".$name."<br>";

}
namePerson("Ram");
namePerson("Ranju");
namePerson("Ramesh");
namePerson("Ramu");

// call by reference value
function adder(&$str2){
    $str2.="Hello php";
}
$str="hlw";
adder($str);
echo $str;
echo"<br>";
// default argument
function services($task="Webdevelopment"){
    echo "The name of service is".$task."<br>";


}
services("Web Design");
services();
$taskis="Code test";
services($taskis);
// echo $taskis;

// returning functions
function cube($n){
    return $n*$n*$n;
}
echo "the cube is ".cube(3);

//Parameteized functions
//add function with two parameter
function add($x,$y){
    $sum=$x+$y;
    echo  "The sum is".$sum;
    return $sum;

}
echo add(5,8);

// call function , get two argument from input  and click sub

;?>
<br>
<br>
<?php 
function addition(...$numbers){
    $sum=0;
    foreach($numbers as $number){
        $sum=$sum+$number;

    }
    return $sum;
}
echo "The sum of the numbers are"." ".addition(1+3+3);