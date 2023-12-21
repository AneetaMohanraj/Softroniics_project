<?php
function splitArray($nums, $k) {
    $left = max($nums); //minimum largest sum must be at least as large as the largest element in the array.
    $right = array_sum($nums);//maximum possible largest sum is the sum of all elements.

    while ($left < $right) {
        $mid = ($left + $right) / 2;//fix a value to break arrays into subarrays
        $count = 1;
        $currentSum = 0;

        foreach ($nums as $num) {
            $currentSum += $num;
            if ($currentSum > $mid) { //if sum of elements so far reaches above the mid value then start the next subarray
                $count++; //counts the no.of subarrays
                $currentSum = $num;
            }
        }
        echo $count."<br>";
        if ($count > $k) { //if the no.of subarrays is greater than k,then increase the mid value so we can get less subarrays
            $left = $mid + 1;
        } else {
            $right = $mid;
        }
    }

    return $left;
}


$nums = [7, 2, 5, 10, 8];
$k = 3;
$result = splitArray($nums, $k);
echo intval($result);
?>
