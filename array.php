<?php 
$languages=array(
    array("c++","java","Php"),
    array("nepali","english","japanese"),
    array("local","international","national")
); 

//Debug
// $allvars=get_defined_vars();
// echo"<pre>";
// print_r($allvars);
for($row=0;$row<3;$row++){
    echo $row;
    for($col=0;$col<3;$col++){
        echo $languages[$row][$col]."<br>";
    }
}

?>