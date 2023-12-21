<?php
$arr=array(1,2,3,4,5,6,7);
$sum=0;
$avg=0;
$count=0;
foreach($arr as $val)
{
  $sum=$sum+$val; //Calculates sum of elements in array
  $count++; //Finds the no.of elements in array
}
$avg=$sum/$count; // Calculates average
echo "Average of elements of given array = ".$avg;
?>