<?php
class ParentClass
{
    public $item;
    public function __construct($value)
    {
        $this->item=$value;
        echo "$this->item accessed<br>";
    }
    public function __destruct()
    {
        echo "$this->item is removed<br>";
    }
}
class ChildClass extends ParentClass
{
    public function message()
    {
        echo "inside child class<br>";
    }
}
$obj=new ChildClass("Object");
$obj->message();
?>