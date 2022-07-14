<?php
$num1=100;
if($num1>200){
    echo "The num is greater than 200";
}else{
    echo"smaller than 200";
}
// if-elseif-else
if($num1<45){
    echo"The num is less than 45";
}elseif($num1>60){
    echo" The num is greater than 60";
}else{
    echo "invalid num";
}

// switch statment
$num11=11;
switch($num11){
    case 11:
        echo"The num is equal to ".$num11;
        break;
        case 25:
            echo"The num is equal to 25";
            break;
        case 50:
            echo"The num is equal to 50";
            break;
        default:
           echo "The num is not equal to all";
}
echo"<br>";
//while condition 
$n=1;
while($n<20){
    echo $n."<br>";
    $n++;
}
//do while
$n1=1;
do{
    echo " Wel come everybody ";
    $n1++;
}while($n1<5);