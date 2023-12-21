<?php
//using while loop

$num=123;
$temp=$num;
$sum=0;
while($num>0)
{
  $dig=$num%10;
  $sum=$sum+$dig;
  $num=$num/10;
}
echo "Sum of $temp = $sum";
?>