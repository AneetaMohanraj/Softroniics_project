<?php
$main=array(
  array("name"=>"Anu","age"=>23,"course"=>"MscCS"),
  array("name"=>"Raju","age"=>26,"course"=>"MCA"),
  array("name"=>"John","age"=>30,"course"=>"MCom")
);
$len=count($main);
foreach($main as $row)
{
  foreach($row as $val=>$value)
  {
    echo $val." = ".$value."<br>";

  }
  echo "<br>";
}

?>
