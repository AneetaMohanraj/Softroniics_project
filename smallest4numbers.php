<?php
$arr=array(1,23,12,67,45,8,2);
echo "Array is : ".implode(", ",$arr)."<br><br>";
$length=count($arr);
$temp=0;
for($i=0;$i<$length;$i++)
{
  for($j=$i+1;$j<$length;$j++)
  {
    if($arr[$i]>$arr[$j])
    { //Sort the array in ascending order
      $temp=$arr[$i];
      $arr[$i]=$arr[$j];
      $arr[$j]=$temp;
    }
  }
}
echo "Smallest 4 elements in the array are : $arr[0],$arr[1],$arr[2],$arr[4]";
?>
