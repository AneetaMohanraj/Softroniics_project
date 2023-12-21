<?php
$arr=[3,4,-1,1];
sort($arr); 
foreach($arr as $val)
{
    if(in_array($val+1,$arr)) 
    {
        continue; 
    }
    else{
        if(($val+1)>0) 
        {
            echo "value dont exist : ".($val+1); 
            break;
        }

    }
}
?>