<?php
// ---------------------------------------------------------------------------------------------------------------------------CLASS AND OBJECTS---------------------------------------------
// class MyClass
// {
//     public $x="Thank You <br>";
//     function message()
//    { 
//        echo $this->x; //accessing public variable value 
//    }
// }
// $obj=new MyClass;
// $obj->message();   
// ---------------------------------------------------------------------------------------------------------------------SORT MULTIDIMENSIONAL ARRAYS----------------------------------------------------------
// function multiplesort($arr)
// {
//     $arr1=$arr[0];
//     $arr2=$arr[1];
//     sort($arr1);
//     sort($arr2);
//     $sorted=array($arr1,$arr2);
//     return $sorted;
// }

// $arr=array(
//     array(5,3,8,1),
//     array(1,8,3,9)
// );
// echo "array before : <br>";
// foreach($arr as $row)
// {
//     echo implode(", ",$row)."<br>";
// }
// $sorted=multiplesort($arr);
// echo "<br>Array after : <br>";
// foreach($sorted as $row)
// {
//     echo implode(", ",$row)."<br>";
// }
// ----------------------------------------------------------------------------------------------------------------------------ARRAY_COLUMN()----------------------------------------------------------------------

// $arr=array(
//     array(1,2,3,4,5),
//     array(3,4,5,7,8)
// );
// $third=array_column($arr,3);
// echo implode(", ",$third)."<br>";
// ------------------------------------------
// $assoc=array(
//     array("name"=>"anu","age"=>23),
//     array("name"=>"raju","age"=>28)
// );
// $ages=array_column($assoc,'age');
// echo implode(", ",$ages)."<br>";
// ----------------------------------------------------------------------------------------------------------------------------ARRAY_KEYS()---------------------------------------------------------------
// $i=array("name"=>"anu","age"=>23);
// $keys=array_keys($i);
// echo implode(", ",$keys)."<br>";
// --------------------------------------------

// $assoc1=array(
//     array("name"=>"anu","age"=>23),
//     array("name"=>"raju","age"=>28)
// );
// $k=array_keys($assoc1);
// echo implode(", ",$k)."<br>";
// -----------------------------------------------
// foreach($assoc1 as $row)
// {
//     $kr=array_keys($row);
// }
// echo implode(", ",$kr)."<br>";
// ----------------------------------------------------------------------------------------------------------------------------ARRAY_VALUES()----------------

// $a = array("name" => "anu", "age" => 23);
// $val=array_values($a); //returns values and re-indexes
// print_r($val);

// // -------------------------------------------------------------------------------------------------------------------MERGING ASSOCIATIVE ARRAYS--------------------------------------------------------

// $a = array("name" => "anu", "age" => 23);
// $b = array("name" => "raju", "age" => 28);

// $merge = array();

// foreach (array_keys($a + $b) as $key) {
//     if (isset($a[$key]) && isset($b[$key])) {
//         $merge[$key] = array($a[$key], $b[$key]);
//     } elseif (isset($a[$key])) {
//         $merge[$key] = $a[$key];
//     } else {
//         $merge[$key] = $b[$key];
//     }
// }

// foreach ($merge as $key => $value) {
//     if (is_array($value)) {
//         echo "$key->" . implode(', ', $value) . "<br>";
//     } else {
//         echo "$key->$value<br>";
//     }
// }
// ------------------------------------------------------------------------------------------------------------------------------ARRAY_MAP()-------------------------------------------------------------------


// function square($n) {
//     return $n * $n;
// }

// $numbers = array(1, 2, 3, 4, 5);
// echo "Before : ".implode(", ",$numbers)."<br>";

// $squares = array_map('square', $numbers);
// echo "After : ".implode(", ",$squares)."<br>";
// --------------------------------------------------------------------------------------------------------------------------------PRINT()----------------------------------------------

// $number = 10;

// if (print("hello")) {                    //print returns 1 no matter what
//     echo "The number is zero or false.";
// } else {
//     echo "The number is not zero or false.";
// }

// for($i=0;$i<10;$i++)
// {
//     if($i==5)
//     {
//         break;
//         continue;
        
//     }
//     echo "$i<br>";
// }

// $a="5";
// $b=5;
// $res=$a+$b;
// echo $res;

// ------------------------------------------------------------------------------------------------------------------------------------ARRAY_DIFF()--------------------------------------------------------------------------

// $arr1=array(1,4,6,8,3);
// $arr2=array("name"=>"anu","age"=>23);
// $arr=array_diff($arr2,$arr1); // finds uncommon elements from both and returns the uncommon elements from first array
// echo implode(", ",$arr);
// -----------------------------------------------------------------------------------------------------------------------------------ARRAY_CHUNKS()-------------------------------------------------------------------------------

// $arr1=array(1,4,6,8,3);
// $arr=array_chunk($arr1,2);//multidimensional array
// foreach($arr as $chunk)
// {
//     echo "[".implode(", ",$chunk)."]<br>";
// }
// ----------------------------------------------------------------------------------------------------------INDEX AND VALUE PRINTING USING FOREACH----------------------------------------------------------------------------

// $arr=array(1,2,3,4,5);
// foreach($arr as $key=>$value)
// {
//     echo "index : $key - value : $value<br>";
// }

// ---------------------------------------------------------------------------------------------------------------------------------GETTYPE()------------------------------------------------------------------------

// $arr=array(1,2,3,"anu","john");
// foreach($arr as $val)
// {
//     if(gettype($val)=='string')
//     {
//         echo "$val<br>"; //prints all strings from array
//     }
// }

// ------------------------------------------------------------------------------------------------------------------------------IS_NUMERIC()------------------------------------------------------------------------------
// $arr=array(1,2,3,"anu","john",TRUE); 
// foreach($arr as $val)
// {
//     if(!(is_numeric($val)))
//     {
//         echo "$val<br>"; //Prints all values that are not numbers including boolean
//     }
// }
// -----------------------------------------------------------------------------------------------------------------------------ARRAY_UNIQUE()------------------------------------------------------------------------------------
// $arr1=array(1,4,6,4,3);
// $arr=array_unique($arr1); //can store in different array  ie, dont replace the original array

// foreach($arr as $k=>$val)
// {
//    echo "$k => $val<br>"; // doesn't reset indexes of removed elements
// }
// -------------------------------------------------------------------------------------------------------------------ARRAY_UNIQUE() IN MULTI-DIMENSIONAL---------
// $arr = array(
//     array(1, 4, 6, 4, 3),
//     array(3, 2, 6, 8, 1),
//     array(1, 4, 6, 4, 3) 
// );

// // Flatten the array, remove duplicate values, and reindex
// $uniqueValues = array_values(array_unique(array_merge(...$arr))); 

// // Display the unique values
// echo "[" . implode(", ", $uniqueValues) . "]";
// --------------------------------------------------------------------------------------------------------------------ARRAY_MERGE() IN MULTI-DIMENSIONAL-------------

// $arr = array(
//     array(1, 4, 6, 4, 3),
//     array(3, 2, 6, 8, 1),
//     array(1, 4, 6, 4, 3) 
// );
// $MERGE=array_merge(...$arr); //spread operator
// echo  implode(", ",$MERGE);
// ------------------------------------------------------------------------------------------------------------------------------ARRAY_COMBINE()----------------

// $a=array("name","age");
// $b=array("anu",23);
// $array=array_combine($a,$b);
// print_r($array);

// $a=array("first"=>123,"sec"=>345);
// $b=array("third"=>567,"fourth"=>890);
// $array=array_combine($a,$b); //combines values of both arrays ie, keys are the values of frst array and values are the values of the second
// print_r($array); 


// -------------------------------------------------------------------------------------------------------------------------------UNSET()------------------------
// $a=array(1, 4, 6, 4, 3);
// unset($a[2]);
// print_r($a);

// ------------------------------------------------------------------------------------------------------------------------------------ARRAY_SPLICE()-----------
// $a=array(1, 4, 6, 4, 3);
// array_splice($a,0,2); //removes 2 elements starting from 0
// print_r($a);//shifts elements to empty indices

// -----------------------------------------------------------------------------------------------------------------------------------------ARRAY_REPLACES()------

// $a=array(1, 2,3,4,5,6);
// $b=array(7,8,9);
// $replace=array_replace($a,$b); //replaces first array's elements with second array's value
// echo  implode(", ",$replace);

// -------------------------------------------------------------------------------------------------------------------------------------------EXPLODE()-------

// how to get all keys from multidimensional
?>