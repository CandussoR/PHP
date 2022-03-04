<?php
   
for ($row = 1; $row <= 7; $row++)
{
  for ($hash = 1; $hash <= 4 - abs($row - 4) ; $hash++)
    {
      echo "#";
    }
  echo "\n";
}
