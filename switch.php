<?php
$grade='C';
switch($grade)
{
  case 'A+':echo "Distinction";
  break;
  case 'A':echo "First Class";
  break;
  case 'B':echo "Second Class";
  break;
  case 'C':echo "Third Class";
  break;
  case 'D':echo "Passed";
  break;
  case 'F':echo "Failed";
  break;
  default:echo "Invalid Grade";
  break;
}
?>
