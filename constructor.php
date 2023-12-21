<?php
class Myclass
{
    private $name;
    function __construct()
    {
        echo "In constructor<br>";
        $this->name="class object";
    }
    function __destruct()
    {
        echo "destroying ".$this->name."\n";
    }
}
$obj=new Myclass();
?>