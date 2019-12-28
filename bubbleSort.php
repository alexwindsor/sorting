<?php



$nums = array(43, 76, 12, 8, 88, 65, 5);

// $nums = array(1, 2, 3, 4, 5);


echo "Original array:\n\n";
print_r($nums);
echo "\n---------\n";

$stop = 0; // indicates array sorted
$arr_size = count($nums); // length of array
$count = 1; // count num of iterations - not needed for the code

// we keep repeating the inner loop until the whole array is sorted
while ($stop == 0) {

$flag = 0; // indicates whether we have made a swap. if we loop through the whole array without swapping two numbers, means that the array is sorted

echo "while loop: ";
echo $count++ . "\n";

// a and b are two values from the array next to eachother which we swap over if b is less than a
$a = null;
$b = null;

// loop through the array
for ($i = 0; $i <= $arr_size - 1; $i++)
{

// if a isn't set then qe must be at the first number, so we store that at a
if (!$a) {
$a = $nums[$i];
continue;
}
// if a has a value and b is null then we need to get the value for b and compare it to a. if it is less than a then we swap the corresponding values in nums array
elseif (!$b) {
$b = $nums[$i];
// compare a with b
if ($b < $a) {
// swap corresponding values in the array so the lower value has the lower index
$nums[$i-1] = intval($b);
$nums[$i] = intval($a);
$i = $i - 1;
$flag = 1; // set flag to indicate that we did a swap
}
// shift everything along one so we can start again at next loop
$a = intval($b);
$b = null;
}

}


// if we went through the whole loop without doing any swaps then the array is fully sorted and we can exit the loop
if ($flag == 0) {
$stop = 1;
}

}







// display sorted array
echo "\n\n";
print_r($nums);




