<?php
abstract class MyClass
{
    abstract public function someMethod();
    abstract public function someMethod1($name,$color);
    public function someMethod2(){
        echo "normal class in abstract class";
    }
}
// class Child1 extends MyClass
// {
//     public function someMethod()
//     {
//         echo "Method of abstract in child1<br>";
//     }
//     public function someMethod1($name,$color)
//     {
//         echo "Color of $name is $color<br>";
//     }

// }
// $obj=new Child1();
// $obj->someMethod();
// $obj->someMethod1("Toyotta","Red");

class Child2 extends MyClass
{
    public function someMethod()
    {
        echo "Method of abstract in child2<br>";
    }
    public function someMethod1($name,$color)
    {
        echo "Color of $name is $color<br>";
    }

}
$obj1=new Child2();
$obj1->someMethod();
$obj1->someMethod1("Toyotta","Red");
$obj1->someMethod2();
?>