<?php
//find triplets which sums upto 0
function triplets($num1,$num2,$num3)
{
  $triplets=array();
  if($num1+$num2+$num3==0) // if the 3 elements sums upto 0 then store in array
  {
    $triplets=array($num1,$num2,$num3);
  }
  return $triplets;
}
$arr=array(1,0,-1,-2,2,4);
$count=count($arr);
for($i=0;$i<$count;$i++)  //select three elements in the array
{
  for($j=$i+1;$j<$count;$j++)
  {
    for($k=$j+1;$k<$count;$k++)
    {
      $triplets[]=triplets($arr[$i],$arr[$j],$arr[$k]);
      
      
    }
  }
}
echo "Triplets are :<br>";
foreach($triplets as $rows)
{
  // echo "[".implode(", ",$rows)."]";
  if($rows==[])
  {
    continue;
  }
  echo "[".implode(", ",$rows)."]<br>";
}
?>
