<?php

function meta()
{
  echo "Ceci est une fonction\n";
}

meta();

function noReturn()
{
  echo "This function has no return : it returns a NULL value.\n";
}

$no_return = noReturn();
echo $no_return;
echo "Guess what null factored by any number equals to.\n" . noReturn() * 10;
echo "\n";

function funcReturn()
{
  return "This one only has a return!\n";
}

$my_return = funcReturn();
echo $my_return;
