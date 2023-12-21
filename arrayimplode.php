<?php
$arr1=array(1,2,3,4,5,6,7,3,6);
$arr2=array(3,6);
$arr=array();
function printrr($arr)
{
    echo implode(", ",$arr)."<br>";
}
printrr($arr);
$arr=array_diff($arr1,$arr2);
printrr($arr);
?>