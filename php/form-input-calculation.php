<?php
function add($x,$y){
    $sum=$x+$y;
    echo  "The sum is".$sum;
    return $sum;

}
?>
<form action="#" method="post">
    Enter num1:<input type="number" name="first"><br>
    Enter num2:<input type="number" name="second"><br>
    <input type="submit" name="adding" value="Addition">

</form>
<?php
if(isset($_POST['adding'])){
    //call add() function
    add($_POST['first'],$_POST['second']);
}

?>