<?php
class MyClass
{
    const LEAVING_MSG="Thank You<br>";
    function message() // access const inside class
   { 
       echo self::LEAVING_MSG; //MyClass::LEAVING_MSG can be used here also
   }
}
$obj=new MyClass();
$obj->message();                        
echo MyClass::LEAVING_MSG; //access const outside class
?>