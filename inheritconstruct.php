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
        echo "$this->item is deleted<br>";
    }
    public function getdata()
    {
        return $this->item;
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
echo "attempt :";
echo $obj->getdata();
?>