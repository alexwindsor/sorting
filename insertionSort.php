<?php


$nums = array(43, 76, 45, 8, 88, 65, 5);

$nums = array(1, 11, 11, 1, 1, 11);

echo "Original array:\n\n";

print_r($nums);

echo "\n---------\n";

$arr_size = count($nums);

// we start at the 2nd value of the array (index 1) and loop through all the values
for ($slice = 1; $slice <= $arr_size - 1; $slice++) {

// record the value and delete index in the array
$tempbit = $nums[$slice];
$nums[$slice] = null;

// loop through all the indexes in the array to the left (lesser) of the value that we deleted. keep shifting all the indexes along until we get to a value less than the value, then put it in the index in front 
for ($i = $slice-1; $i >= -1; $i--) {

// if value is greater than the value we deleted
if ($nums[$i] > $tempbit) {
// shift the index up to the deleted gap, then next loop we check the next value to the left
$nums[$i+1] = $nums[$i];
$nums[$i] = null;
}
// if the value we are comparing is less, then we stop looping and insert our value in the gap above
elseif ($nums[$i] <= $tempbit) {
$nums[$i+1] = $tempbit;
break;

}
 
}


}








echo "Insertion sort:\n\n";

print_r($nums);




