<?php
//Simple arrays
// Construct an ordered array wth the function
// Can contain multiple data types.
$lambda_array = array(0, 1, "two", 3.0);
echo count($lambda_array);
echo "\n";

//Constructing array with brackets
$bracket_array = ["yes", "we", "can"];
echo $bracket_array; # won't print the array!
echo "\n";

//Must print with those functions
print_r($bracket_array);
echo implode(", ", $bracket_array) . "\n";

//Accessing array
echo $lambda_array[2] . "\n";
echo $bracket_array[$lambda_array[2]]; #doesn't seem to work
$var = 2;
echo $bracket_array[$var] . "\n";

// Adding to the array
$bracket_array[] = 2;
echo implode(", ", $bracket_array) . "\n";
//Modifies element at index 1
$bracket_array[1] = "sir";
print_r($bracket_array) . "\n";

//Removing last from array
$number = array_pop($bracket_array) . "\n"; # returns the removed element
print($bracket_array);
//Adds multiple elements at the end of the array, returns length
$religious_array = array_push($bracket_array, "my", "lord");
echo "\n" . $religious_array; #prints only the count of the array.
echo "\n";

//Removing first from array
$affirmation = array_shift($bracket_array);
echo $affirmation . "\n";
//Adds multiple elements at the beginning
$arr_len = array_unshift($bracket_array, "yes", "we", "can");
echo $arr_len . "\n";
echo implode(", ", $bracket_array) . "\n";

// There are also nested arrays, same way to access as Python or Java
$labyrinth = ["this", "is", 1, ["hell", "of", ["where", "is", ["EXIT"], "the", "exit?"], "a", "maze"]];
echo $labyrinth[3][2][2][0];
