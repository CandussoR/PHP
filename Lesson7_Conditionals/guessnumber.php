<?php

$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

echo "Welcome to NumberGuessr! You have to guess a number between 1 and 10. Think you can do it?";

function guessNumber()
{

  global $play_count, $correct_guesses, $guess_high, $guess_low;

  $play_count++;

  $number = rand(1, 10);
  echo "\nI'm ready ! Your guess!\n";
  $guess = intval(readline(">> "));
  echo "This is round $play_count. The number was $number, and you guessed $guess.\n";
  if ($guess === $number){
    $correct_guesses++;
    } elseif ($guess > $number) {
      $guess_high++;
    } elseif($guess < $number) {
      $guess_low++;
    };

  $pct_win = 100 * $correct_guesses / $play_count;
  echo "You've been right $pct_win% of the time !\n";
  if ($guess_high > $guess_low ) {
    echo "When you guessed wrong, you tended to guess high.";
  } else {
    echo "When you guessed wrong, you tended to guess low.";
  }
}

guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
