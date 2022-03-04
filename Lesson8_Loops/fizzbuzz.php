<?php

for($i = 1; $i <= 100; $i++)
{
  if (($i % 15) === 0) {
    echo "FizzBuzz\n";
  } elseif (($i % 3) === 0) {
    echo "Fizz\n";
  } elseif (($i % 5) === 0 ) {
    echo "Buzz\n";
  } else {
    echo $i."\n";
  }
}

// Same loop using shortcut notation
/*
for($i = 1; $i <= 100; $i++) :
  if (($i % 15) === 0) {
    echo "FizzBuzz\n";
  } elseif (($i % 3) === 0) {
    echo "Fizz\n";
  } elseif (($i % 5) === 0 ) {
    echo "Buzz\n";
  } else {
    echo $i."\n";
  }
endfor;
*/

// Same loop using foreach, with added constraints.
/*
$output = [];
for($i = 1; $i <= 100; $i++)
{
  if (($i % 15) === 0) {
    array_push($output, "FizzBuzz");
  } elseif (($i % 3) === 0) {
    array_push($output, "Fizz");
  } elseif (($i % 5) === 0 ) {
    array_push($output, "Buzz");
  } else {
    array_push($output, $i);
  }
}
foreach ($output as $value) {
  if ($value === "Fizz") {
    continue;
  } elseif ($value === "FizzBuzz") {
    echo $value;
    break;
  }
  echo $value . "\n";
}
*/
