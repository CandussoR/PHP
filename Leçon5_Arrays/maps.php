<?php
/*
  An associative array is a data structure
  which contains keys which aren't indices.
  A map associates keys and values.
  Use => to assiate a key with a value.
*/

$asso_array = ["Zappa" => "Guitarist", "Bozzio" => "Drummer",
              "Aphex" => "Twin", "Squarepusher" => "Turntablist"];

print_r($asso_array);

//Adds an element with the key Lopez
$asso_array["Lopez"] = "Drummer";
print_r($asso_array);

echo $asso_array["Zappa"];

//Remove an element
unset($asso_array["Squarepusher"]);

//When keys are numbers, adding to the array
//without any keys will add 1 to the largest integer used thus far.


/* We can combine two arrays with +,
but if the key is the same, only the association from Array1
will remain. */


/* Once again you can modify or copy an association
depending on wether you pass an argument by value or reference.
