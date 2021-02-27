
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

$stop = 0; // indicates array sorted
$arr_size = count($nums); // length of array
$count = 1; // count num of iterations - not needed for the code

// we keep repeating the inner loop until the whole array is sorted
while ($stop == 0) {

  echo "<u>loop # " . $count++ . "</u> : ";
  echo implode(" ", $nums) . "<br>";

  $flag = 0; // indicates whether we have made a swap. if we loop through the whole array without swapping two numbers, means that the array is sorted

  // a and b are two values from the array next to eachother which we swap over if b is less than a
  $a = null;
  $b = null;

  // loop through the array
  for ($i = 0; $i < $arr_size; $i++)
  {

    // if $a isn't set then we must be at the first number, so we store that at $a
    if (!$a) {
      $a = $nums[$i];
    }


    // if a has a value and b is null then we need to get the value for b and compare it to a. if it is less than a then we swap the corresponding values in nums array
    elseif (!$b) {
      $b = $nums[$i];
        // compare a with b
        echo "is " . $b . "<" . $a . " ? ";
      if ($b < $a) {
        // swap corresponding values in the array so the lower value has the lower index
        echo "Yes, so we swap them around.";
        $nums[$i-1] = $b;
        $nums[$i] = $a;
        // $i = $i - 1;
        $flag = 1; // set flag to indicate that we did a swap
      }
      else echo "No";
      // shift everything along one so we can start again at next loop
      echo "...moving along the array now<br><br>";
      $a = $b;
      $b = null;
      }

    }


  // if we went through the whole loop without doing any swaps then the array is fully sorted and we can exit the loop
  if ($flag == 0) {
    $stop = 1;
    echo "FINISHED.";
  }

}



// display sorted array
echo "<br><hr><br>";
echo implode(" ", $nums);
echo "<br><hr><br><br>";