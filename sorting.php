<?php
$arr=array("anu","raju","ebi");
function printArray($arr,$name)
{
    foreach($arr as $val)
    {
        if($val===$name)
        {
           echo "$name is available ";
           return;
        }
    }
    echo "$name Not available";
}
printArray($arr,"john");
?>