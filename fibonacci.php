<?php
$f1=0;
$f2=1;
echo "$f1 , $f2 , ";
for($i=0;$i<10;$i++)
{
  $f3=$f1+$f2;
  echo "$f3 , ";
  $f1=$f2;
  $f2=$f3;
}
?>