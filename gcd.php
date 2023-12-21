<?php
function gcd($num)
{
  for($i=2;$i<=$num;$i++)
  {
    if($num%$i==0)
    {
      $factors[]=$i; //Calculates factors and stores in array
    }
  }
  return $factors;
}
$a=36;
$b=48;
$factor_a=gcd($a);
$factor_b=gcd($b);
echo "Factors of $a = ".implode(", ",$factor_a)."<br>";
echo "Factors of $b = ".implode(", ",$factor_b)."<br>";
echo "<br>";
foreach($factor_a as $val1)
{
  foreach($factor_b as $val2)
  {
    if($val1==$val2)
    {
      $common_factors[]=$val1;//find common factor
    }
  }
}
echo "Common factors of both $a and $b = ".implode(", ",$common_factors)."<br>";
$gcd=max($common_factors); // find largest common factor
echo "Greatest Common Divisor of $a and $b is ".$gcd;
?>
