<?php
$arr=[3,4,-1,1];
sort($arr); // sort the array

foreach($arr as $val)
{
    if(in_array($val+1,$arr)) //checks in each case if the next number exists
    {
        continue; // if it doesnt,then continue
    }
    else{
        if(($val+1)>0) //if it exists then check if its positive
        {
            echo "value dont exist : ".($val+1); //if exists then print
            break;
        }

    }
}
?>