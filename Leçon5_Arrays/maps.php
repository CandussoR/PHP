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
$ordered_array = [
  "first" => "This",
  "second" => "is",
  "third" => "ordered"
];
$ordered_array[] = "new one";
print_r($ordered_array);
$ordered_array[97] = "key is 97";
$ordered_array[] = "void key should be 98";
echo "\nNew ordered array :";
print_r($ordered_array);

/* We can combine two arrays with +,
but if the key is the same, only the association from Array1
will remain. */
echo "\nLet's add a band member array to asso_array";
$opeth = [
  "Akerfeldt" => "Guitarist",
  "Lindgren" => "Guitarist",
  "Mendez" => "Bassist",
  "Lopez" => "Drummer"
];
echo "\n\$asso_array should be increased by 3,
though \$opeth is 4 members.\n";
$sum_array = $asso_array + $opeth;
print_r($sum_array);

/* Once again you can modify or copy an association
depending on wether you pass an argument by value or reference.
*/
$copy_array = $sum_array;
echo "\nNow \$copy_array is \$sum_array by value. Adding to \$sum_array: ";
# array_unshift($sum_array, "Vedder" => "Singer");
//Can't use unshift with an associative array, so :
$sum_array = array("Vedder" => "Singer") + $sum_array;
echo "\n\$sum_array is now : \n";
print_r($sum_array);
echo "\nAnd copy array still is:\n";
print_r($copy_array);

echo "\nIf we assign an array by reference with &";
$old_opeth = $opeth;
$new_open &= $opeth;
echo "\nOpeth members left.\n";
unset($opeth["Lindgren"]);
unset($opeth["Lopez"]);
echo "\nNew members came.\n";
$opeth["Akesson"] = "Guitarist";
$opeth["Axenrot"] = "Drummer";
echo "\nSo now Opeth is:\n";
print_r($opeth);
echo "\nBut old fans still say that the REAL Opeth is\n";
print_r($old_opeth);
echo "\nSorry boys, it's just an old Opeth copy.\n";
