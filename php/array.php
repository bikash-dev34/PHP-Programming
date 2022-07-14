<?php
$programming=array("c#","java","python","php");
foreach($programming as $language){
    echo $language."<br>";
}
echo $programming[2],$programming[1];

echo"<br>";
// Associative array 
$employment=array('name'=>'Ram Sharma','salary'=>40000,'position'=>'Manager','addres'=>'Kathmandu');
$employment['phone']=999;
foreach($employment as $key => $value){
    $details=$key.":".$value."<br>";
    echo $details;
}
echo count($employment);
sort($employment);
echo"<br>";

// multidimensional array 
$emp_info=array(
    array(
        1,'Ram',4000
    ),
    array(2,'Seem',5000),
    array(3,'Sony',8000)
);
for($row=0;$row<3;$row++){
    for($col=0;$col<3;$col++){
        echo $emp_info[$row][$col];
    }
    echo"<br>";
}