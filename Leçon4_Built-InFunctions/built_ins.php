<?php

$var1 = "string";
echo gettype($var1) . "\n";
echo var_dump($var1);

// Some string built-in functions
echo strrev("Radiohead") . "\n";
echo strtolower("LiKe In TeEnAgEhOoD\n");
echo str_repeat("Won't you believe it it's just my luck\n", 6);

$hemingway = "They were snow-bound a week in the Madlenerhaus\
 that time in the blizzard playing cards in the smoke\
  by the lantern light and the stakes were higher all the time\
   as Herr Lent lost more. ";
// is case sensitive !
echo substr_count($hemingway, "the") . "\n";
echo substr_count($hemingway, "play") . "\n";

// Usual number function
echo abs(-10);
echo round(1.2);
echo round(92.4586, 3);

echo rand() . "\n";
echo getrandmax() . "\n";
//return random number between int1 and int2
echo rand(1, 200) . "\n";


//Using built-in functions inside functions
function convertToShout($whisper)
 {
   return strtoupper($whisper) . "!";
 }

echo convertToShout("are you awake") . "\n";

function tipGenerously($meal_cost, $tip = 20)
{
  return ceil($meal_cost + ($meal_cost * $tip / 100));
}

echo tipGenerously(100.00) . "\n";

function calculateCircleArea($diameter)
{
  return pi() * ($diameter / 2)**2;
}

echo calculateCircleArea(25);
