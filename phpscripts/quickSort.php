<h1>Quick Sort</h1>

<p>

</p>

<br><hr><br>

<?php


// $nums = array(43, 76, 12, 43, 8, 88, 65, 5);

for ($i = 0; $i < 10; $i++) {
  $nums[] = rand(0,99);
}

echo implode(" ", $nums);



function quickSort($nums) {

if (count($nums) < 2) return $nums;

  $pivot = array(array_shift($nums));
  $gt = $lt = array();

  foreach ($nums as $num) {
    if ($num >= $pivot[0]) $gt[] = $num;
    elseif ($num < $pivot[0]) $lt[] = $num;
    }

  return array_merge(quickSort($lt), $pivot, quickSort($gt));

}



echo "<br><hr><br>";

echo implode(" ", quickSort($nums));
