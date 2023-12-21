<?php
$arr=array(2,5,3,4,1);
$len=count($arr);
$largest=0;
$second_largest=0;
for($i=0;$i<$len;$i++)
{
  if($arr[$i]>$largest)
  {
    $second_largest=$largest; // Stores previous largest as 2nd largest
    $largest=$arr[$i];     // Stores Largest element
  }
  if(($largest > $arr[$i])&& ($arr[$i]> $second_largest))
  {                //if element greater than 2nd largest 
    $second_largest=$arr[$i];  //and smaller than largest
  }                //exists then set it as 2nd largest
}
echo "Second largest : ".$second_largest;
;
?>