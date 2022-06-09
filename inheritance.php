<?php 
class Demo{
    public function display(){
        echo"This is example of inheritance";
    }
}
    class Demo1 extends Demo{
        public function view(){
            echo "and contains properties of parents";
        }
    } 

$obj=new Demo1();
$obj->display();
$obj->view();
?>