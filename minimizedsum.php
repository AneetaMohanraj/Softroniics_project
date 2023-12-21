<?php
$nums=[5,7,7,8,8,8,8,10];
$target=8;
$arr=[];
$c=count($nums);
for($i=0;$i<$c;$i++)
{
    if($nums[$i]==$target)
    {
       array_push($arr,$i);
    }
}

$count=count($arr);
echo "[{$arr[0]} , {$arr[$count-1]}]";
?>