<?php

function sumOfSubArrays($first,$second)
{
    $sum1=array_sum($first);
    $sum2=array_sum($second);
    if($sum1>$sum2)
{
        return $sum1;
    }
    else{
        return $sum2;
    }
}
$nums=[7,2,5,10,8];
$c=count($nums);
$k=2;
$large=[];
for($i=0;$i<$c;$i++)
{
   $f=array_slice($nums,0,$i+1);
   $s=array_slice($nums,$i+1,$c-1);
   $l=sumOfSubArrays($f,$s);
   array_push($large,$l);   
}

$smallest=min($large);
echo "Minimized largest sum of subarrays : $smallest ";
?>
