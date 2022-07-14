<?php
for($n=1;$n<=10;$n++){
    echo $n."<br>";
    
}
//nested for loop
for($i=1;$i<=4;$i++){
    for($j=0;$j<=3;$j++){
        echo $i.$j."<br>";
    }
}
// foreach loop
$months=array("January","February","March","April");
foreach($months as $month){
    echo " The month is "."".$month."<br>";
}
// assiciative array
$program=array(
     "php"=>"Scripting Language",
    "css"=>"Styling",
    "js"=>"interactive design"

);
   foreach($program as $key=>$element){

    echo $key.":".$element."<br>";
    
   }
//    multidimensional array 
//declare multidimensional array
$a=array();
$a[0][0]="Ram";
$a[0][1]="Frontend Developer";
$a[1][0]="Hari";
$a[1][1]="Backend Developer";
echo"<pre>";
print_r($a);
// display multidimensional array
foreach($a as $v){
    foreach($v as $v1){
        echo $v1."<br>";
    }
}
$number=array('Sun',3,'Mon','Tue','Wed');
foreach($number as $day){
    if($day=='3'){
        continue;
    }
    echo $day."<br>";
}