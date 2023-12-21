<?php
$mul=1;
$x=1;
while($mul<=10)
{
  do
  {
    echo "$mul x $x = ".$mul*$x."<br>";
    $x++;
  }while($x<=10);
  echo "---------------------------------------<br>";
  $x=1;
  $mul++;

}
?>