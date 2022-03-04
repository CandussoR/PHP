<?php

function willWeEat($meal, $bool)
{
  if ($meal === "dessert" || $bool === TRUE){
    return "Yum. Thanks!";
  }
  return "No thanks. We're not hungry.";
}

echo "\n" . willWeEat("ramen", FALSE);
echo "\n" . willWeEat("dessert", FALSE);

function duckDuckGoose($is_goose)
{
  if (!$is_goose) {
    return "duck";
  }
  return "goose!";
}

echo duckDuckGoose(FALSE)."\n";
echo duckDuckGoose(FALSE)."\n";
echo duckDuckGoose(TRUE)."\n";

//New functionality in an array : in_array.
$banana_cream = ["whole milk", "sugar", "cornstarch", "salt", "egg yolks",
                "butter", "vanilla extract", "bananas", "heavy cream",
                "powdered sugar"];
$experimental_pie = ["whole milk", "sugar", "bananas", "chicken", "salmon",
                    "garlic"];

function eatPie($ing_arr)
{
  if (in_array(array("bananas", "chicken"), $ing_arr)) {
    return "Delicious pie!";
  }
  return "Disgusting!";
}
