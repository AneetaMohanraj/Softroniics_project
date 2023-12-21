<?php
function areaRect($len,$wid) //function to calculate area
{
  $area=$len*$wid;
  return $area;
}
$w=5;
$l=4;
$area=areaRect($l,$w); //function call
echo "Area of Rectangle = $area";


?>