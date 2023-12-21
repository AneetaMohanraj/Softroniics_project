<?php
$a=5;
$b=3;
echo "before : a=$a b=$b<br><br>";
$a=$a+$b;      //a contains total of a and b that is 8
echo "a=$a b=$b<br>";
$b=$a-$b;        // a is 8 and b is 3. so a-b=8-3=5. 5 is stored in 'b'. it was 'a' before
echo "a=$a b=$b<br><br>";
$a=$a-$b;       // a is 8 and b is 5 now. so a-b=8-5=3. 3 is stored in 'a'. it was 'b' before
echo "After : a=$a b=$b<br>";
?>
