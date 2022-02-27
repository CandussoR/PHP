<?php

function sum($num1, $num2)
{
  return $num1 + $num2;
}

echo sum(12, 4) . "\n";

function factor($num1, $num2)
{
  return $num1 * $num2;
}

// Pass the returned value of another function as value
echo factor(sum(12, 4), 4) . "\n";

// Pass by value
function addLine($word)
{
  $word .= "\n";
  echo $word;
}

$word = "learn";
addLine("word");
echo $word . " has no line break added after pass-by-value argument.";

// Pass-by-reference
function addLineRef(&$word)
{
  $word .= "\nhas been added a line break!";
}

$word = "Banana";
addLineRef($word);
echo $word;
