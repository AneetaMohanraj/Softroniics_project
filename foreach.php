<?php
$name=array(1,2,3,4,5,6,7,8,9,10);
echo "Array is : ".implode(", ",$name);
echo "<br>";
$len=count($name);
$i=0;
echo "Length of array is : ".$len."<br>";
foreach($name as $val)
{
  if($val%2==0)
  {
    $even[$i]=$val;
    $i++;
  }
  else
  {
    $odd[$i]=$val;
    $i++;
  }
}
echo "even array : ".implode(", ",$even);
echo "<br>";
echo "odd array : ".implode(", ",$odd);
?>
