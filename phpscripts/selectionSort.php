
<h1>Selection Sort</h1>

<p>
We loop through the array from left to right getting the lowest number. Then we swap that number around with the number at the start of the array.
</p>
<p>
Then we repeat the above, except starting the loop at the next position in the array from the left (ie. ignoring the lowest number that we just swapped) until the starting postion is the last number in the array.
</p>

<br><hr><br>

<?php

$nums = array(43, 76, 12, 8, 88, 65, 5);

echo "Original array:<br><br>";

echo implode(" ", $nums);

echo "<br><hr><br>";

$slice = 0; // represents the index of the array that we start at. this will increment 1 on each loop
$arr_size = count($nums);

for ($j = 0; $j < $arr_size; $j++) {

  echo "#" . $slice . "== lowest is: ";

  $lowest = array();
  // loop through the array starting at $slice, to the end and get the value and index key of lowest value in the array
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
      $pos = $lowest[0] + $slice;
    }

  } // end of inner ($i) loop


  echo $lowest[1] . "<br>";


  // now we have the lowest value in the array, and its key, we then swap it with the value at the start of the array, after previously sorted values, so at position $slice
  $nums[$lowest[0]] = $nums[$slice];
  $nums[$slice] = $lowest[1];

  echo "swapped lowest with the furthest to the left: " . implode(" ", $nums) . "<br><br>";

  $slice++; // then increment slice

} // end of outer ($j) loop



// display sorted array
echo "<br><hr><br>";
echo implode(" ", $nums);
echo "<br><hr><br><br>";
