<?php

// A simple while loop.
$count = 1;
while ($count <= 100)
{
  if ( ($count % 33) === 0)
  {
  echo "$count is divisible by 33\n";
  }
  $count++;
}

// A simple do-while loop.
// Notice the if statement don't need brackets if it's not a block.
$plant_height = 45;

do {
  echo "The plant is $plant_height tall.\n";
  if ($plant_height >= 30)
    echo "And can produce fruit.\n";
  $plant_height++;
} while ($plant_height <= 30);

// Basic for loop countdown.
for($i = 10; $i >= 0; $i--)
{
  if ($i >= 3)
  {
    echo $i."\n";
  } elseif ($i === 2) {
    echo "Ready!\n";
  } elseif ($i === 1) {
    echo "Set!\n";
  } else {
    echo "Go!";
  }
}

//Basic foreach with dictionary
$scores = [
  "Alice" => 99,
  "Bob" => 95,
  "Charlie" => 98,
  "Destiny" => 91,
  "Edward" => 88
];

foreach ($scores as $grade)
{
  echo "Someone received a score of $grade.\n";
}

foreach ($scores as $student => $grade)
{
  echo "$student reveived a score of $grade.\n";
}

// Using continue to skip a value and break to end the loop earlier.
for ($i = 10; $i >= 0; $i--) {
  if ($i === 6) {
    continue;
  } elseif ($i === 2) {
    echo "Ready!\n";
  } elseif ($i === 1) {
    echo "Set!\n";
    break;
  } elseif ($i === 0) {
    echo "Go!\n";
  } else {
    echo $i . "\n";
  }
}
