
<h1>Bubble Sort</h1>

<p>
We loop through the numbers comparing each number with the number next to it. If the number on the right is less than the number on the left then we swap them around.
</p>
<p>
We keep doing this until we get to the end, then we start at the top of the array again. Once we have gone through the whole array without swapping any numbers around, then we know that all the numbers are in the correct order and we can stop.
</p>

<br><hr><br>

<?php




$nums = array(43, 76, 12, 8, 88, 65, 5);

// $nums = array(1, 2, 3, 4, 5);


echo "Original array:\n\n";
echo implode(" ", $nums);
echo "<br><hr><br>";

$stop = 0; // when it is 1 everything is in order

$arr_size = count($nums); // length of array
$count = 1; // count num of iterations - not needed for the code

// we keep repeating the inner loop until the whole array is sorted
while ($stop === 0) {

  echo "<u>Start of array: " . implode(" ", $nums) . "</u><br>";

  $swapped = 0; // if '1' then we have done a swap

  for ($pointer = 0; $pointer < $arr_size -1; $pointer++) {

    $a = $nums[$pointer];
    $b = $nums[$pointer+1];

    echo "is $a > $b ? ";

    if ($a > $b) {
      echo "YES - we swap them round.";
      $nums[$pointer] = $b;
      $nums[$pointer+1] = $a;
      $swapped = 1;
    }
    else echo "No.";
    echo "Shift along..<br>";

  }


  // if we went through the whole loop without doing any swaps then the array is fully sorted and we can exit the loop
  if ($swapped === 0) {
    echo "FINISHED.";
    $stop = 1;
  }
}



// display sorted array
echo "<br><hr><br>";
echo implode(" ", $nums);
echo "<br><hr><br><br>";
