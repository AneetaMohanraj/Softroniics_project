<?php 
  $name = "Aneeta";    //Global Variable 
  function global_var() 
  { 
    global $name;
    $n="anu";
    echo "Global Variable inside the function: ". $name."</br>";
    echo "Local Variable inside the function: ". $n."</br>"; 
    echo "</br>"; 
  } 
  global_var(); 
  echo "Global Variable1 outside the function: ". $name."</br>"; 
  echo "Local Variable1 outside the function: ". $n."</br>";



  $arr=array(0,4,6,7,4,8,0,5,9);
 echo implode(", ",array_unique($arr));
?> 