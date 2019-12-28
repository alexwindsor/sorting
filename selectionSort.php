<?php


$nums = array(43, 76, 12, 8, 88, 65, 5);

echo "Original array:\n\n";

print_r($nums);

echo "\n---------\n";

$slice = 0; // represents the index of the array that we start at. this will increment 1 on each loop
$arr_size = count($nums);

for ($j = 0; $j < $arr_size; $j++) {

$lowest = array();
// loop through the array starting at $slice, to the end and get the value and index keyof lowest value in the array
for ($i = $slice; $i < $arr_size; $i++) {

// if we are at start of loop then record first value to compare with later values
if (!isset($lowest[1])) {
$lowest[0] = $i; // index key
$lowest[1] = $nums[$i]; // value
}
// overwrite $lowest if we come to a lower value in the array
elseif ($nums[$i] < $lowest[1]) {
$lowest[0] = $i;
$lowest[1] = $nums[$i];
}


} // end of inner ($j) loop

// now we have the lowest value in the array, and its key, we then swap it with the value at the start of the array, after previously sorted values, so at position $slice
$nums[$lowest[0]] = $nums[$slice];
$nums[$slice] = $lowest[1];

$slice++; // then increment slice

} // end of outer ($j) loop



// display sorted array
print_r($nums);




