<?php
$arr=[7,8,9,11,12];
sort($arr);
$i=1;
foreach($arr as $val)
{
    if($val==$i) //start searching from 1
    {
        $i++; // if the number exists in array then continue search
    }
    else{
        echo "smallest Missing value is $i"; //if it dont exist then print
        break; // to stop furthur search 
    }
}

?>