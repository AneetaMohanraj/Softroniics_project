<?php
//using do-while loop

$num=123;
$temp=$num;
$rev=0;
do
{
  $rem=$num%10;
  $rev=$rev*10+$rem;
  $num=intval($num/10); //ensure the decimal part is removed and only the integer is returned. That is it ensures to remove the last digit from the original number.
}while($num>0);
echo "Reverse of $temp = $rev";
?>