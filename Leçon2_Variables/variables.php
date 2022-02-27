<?php

  $tautology = "variable";
  $meta = "Ceci n'est pas une variable";
  $ex_plain = "\nA two-word variable name takes an underscore.";

  echo $meta . $ex_plain . "\n";
  echo "This concatenates a string and a variable: " . $meta;
  echo "\nBut you can also put a $tautology inside the quotes.";
  echo "\nYou can also wrap ${tautology}s to add something to them.";
  echo " Just use \${variable_name} and you'll be fine buddy.\n";

  $var1 = "var1";
  $var2 = "var2";
  $var1 = $var2;
  echo $var1;

  $var2 = "var3";
  echo "\n" . $var1;

  $meta .= ", c'est une chaîne de caractères.";

  echo "\nYou can tranform a variable with the concatenation operator \".=\".";
  echo $meta;

  echo "\nWhen assigning one variable to another, you only assign a copy. ";
  echo "Modifying the right-side variable doesn't alter the left-side one. ";
  echo "\nTo assign by reference, use =&";

  $meta =& $tautology;

  echo "\$meta =& \$tautology;";
  echo "\n" . $meta;

  $tautology = "A rose is a rose";
  echo "\n\$tautology = \"A rose is a rose. \nNow \$meta is: \n";

  echo $meta . "\n";
