<?php
class Fruit{
    //properties
    public $name;
    public $color;

    //Methods
    function set_name($name){
        $this->name=$name;

    }
    function get_name(){
        return $this->name;
    }
}
$apple=new Fruit();
$mango=new Fruit();
$apple->set_name('apple');
$mango->set_name('mango');

echo $apple->get_name();
echo"<br>";
echo $mango->get_name();
?>
<?php 
class Fruits1{
    public $name;
    protected $color;
    private $weight;

   
}
?>