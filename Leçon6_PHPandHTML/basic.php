<?php

$moi = [
  "name" => "Romain Candusso",
  "birth_year" => 1990,
  "favorite_food" => "curry",
  "hobby" => ["writing", "coding"]
];

function calculateAge($pers_arr)
{
  $current_year = date("Y");
  $age = $current_year - $pers_arr["birth_year"];
  return $age;
}

?>

<title>The basicest site</title>
<h1>Welcome !<h1>
  <h2>About me</h2>
  <?php
  echo "<h3>My name is {$moi["birth_year"]},</h3>";
  echo "<p> I'm " . calculateAge($moi) - 1 . " years old,</p>";
  echo "<div>I have a passion for {$moi["hobby"[0]]} and I got quite hooked on
  {$moi["hobby"[1]]}.</div>";
  ?>

  <h2>Hope you like the shape of me !</h2>
  <?= "<p>That's just another form of the echo keyword btw.</p>"; ?>
