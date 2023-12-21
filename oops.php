<?php
class MyClass
{
  private $name;
  private $rollno;
  public function setName($n,$r)
  {
    $this->name=$n;
    $this->rollno=$r;
  }
  public function getName()
  {
    return array($this->name,$this->rollno);
  }

}
$obj=new Myclass;
$obj->setName("abc",3);
$data=$obj->getName();
echo "$data[0] - $data[1]";
?>