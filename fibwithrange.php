<?php
$f1=0;
$f2=1;
$range=15;

echo "$f1, $f2, ";
for($i=0;$i<100;$i++)
{
  $f3=$f1+$f2;
  if($f3>$range)
  {
    break;
  }
  echo "$f3, ";
  $f1=$f2;
  $f2=$f3;
  
}
?>
