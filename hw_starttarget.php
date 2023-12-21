<?php
$nums=[5,7,7,10];
$target=8;
$arr=[];
$c=count($nums);
for($i=0;$i<$c;$i++)
{
    if($nums[$i]==$target)
    {
       array_push($arr,$i);//stores all indexes with the target
    }
}
if($arr==[]){
    echo "no elements"; //if no elements exists
}
else{
    $count=count($arr);
    echo "[{$arr[0]} , {$arr[$count-1]}]";//prints the first and last index
}
?>