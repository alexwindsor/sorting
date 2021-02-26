
<h1>Insertion Sort</h1>

<p>
We loop through all the numbers in the array, starting with the 2nd one from the left. Then we go backwards comparing it with the number on the left. If the number on the left is greater than then one on the right, then we swap them round.
</p>
<p>
Then we start again with the 3rd number on the left until we get to the end of the array.
</p>

<br><hr><br>

<?php


$nums = array(43, 76, 45, 8, 88, 65, 5);

// $nums = array(1, 11, 11, 1, 1, 11);

echo "Original array:\n\n";

echo implode(",", $nums) . "<br>";

echo "<br><hr><br>";

$arr_size = count($nums);

// we start at the 2nd value of the array (index 1) and loop through all the values
for ($slice = 1; $slice < $arr_size; $slice++) {

  echo "start loop: " . implode(",", $nums) . "<br>";

  // record the value and delete index in the array
  $tempbit = $nums[$slice];
  $nums[$slice] = null;

  echo "...." . $tempbit . "?<br>";

  // loop through all the indexes in the array to the left (lesser) of the value that we deleted. keep shifting all the indexes along until we get to a value less than the value, then put it in the index in front
  for ($i = $slice-1; $i >= -1; $i--) {

    echo "<br>  &nbsp; &nbsp; &nbsp; =====" . $i . "<br>";

    // if value is greater than the value we deleted
    if ($nums[$i] > $tempbit) {
      echo "----- " . $nums[$i] . " > " . $tempbit . " - swap them and continue to the left.<br>";
      // shift the index up to the deleted gap, then next loop we check the next value to the left
      $nums[$i+1] = $nums[$i];
      $nums[$i] = null;
    }
    // if the value we are comparing is less, then we stop looping and insert our value in the gap above
    elseif ($nums[$i] <= $tempbit) {
      echo "----- " . $nums[$i] . " <= " . $tempbit . " - insert " . $tempbit . " next to " . $nums[$i] . ".<br>";
      $nums[$i+1] = $tempbit;
      break;
    }

  }


}






echo "<br><hr><br>";

echo implode(",", $nums) . "<br>";
