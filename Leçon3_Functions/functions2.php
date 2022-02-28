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
  addLine($word);
  echo $word . " has no line break added after pass-by-value argument.\n";

  // Pass-by-reference
  function addLineRef(&$word)
  {
    $word .= "\nhas been added a line break!";
  }

  $word = "Banana";
  echo $word;
  addLineRef($word);
  echo $word . "\n";

  $global_word = "Wow";

  // Using global keyword
  function addExclamation() {
    global $global_word;
    $new_word = $global_word . "!\n";
    return $new_word;
  }

  echo addExclamation();
  echo "\$global_word is $global_word";
  echo "Now \$new_word is $global_word\n";
