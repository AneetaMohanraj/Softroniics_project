<?php
$arr=array(1,0,1,1,1,0,0,1,1,1,1,0);
$len=count($arr);
$count=0;
$ones=array();
for($i=0;$i<$len;$i++)
{
  if($arr[$i]==1) //increment count if 1
  {
    $count++;
  }
  else //store count in array if not 1
  {
    $ones[]=$count;
    $count=0; //set count as 0
    continue;
  }
}
if($i==$len)
{
  $ones[]=$count; //to store the last count in array
}
$max=max($ones);
echo "Maximum consequtive 1s = $max";
?>