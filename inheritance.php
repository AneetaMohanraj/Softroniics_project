<?php
class fruit
{
    public $name;
    public $color;
    public function __construct($name,$color)
    {
        $this->name=$name;
        $this->color=$color;
    }
    public function intro()
    {
        echo "My name is {$this->name} and my color is {$this->color}<br>";
    }
}
class apple extends fruit
{
    public function message()
    {
        echo "Am i a fruit ? <br>";
    }
}
$apple=new apple("apple","red");
$apple->message();
$apple->intro();
?>