<?php //Uses shortcut notations for loops with html. ?>

<h1>Only Shoes Shoe Shop</h1>
<?php
$i = 0;
$repeats = [0, 1];
while ($i < 5) :
?>
<p>We sell shoes</p>
  <?php
  foreach ($repeats as $value) :
  ?>
  <p>(only shoes)</p>
  <?php
  endforeach;
  ?>
<?php
  $i++;
  endwhile;
?>

<h1>Shoe Shop</h1>
<?php
$footwear = [
  "sandals" => 4,
  "sneakers" => 7,
	"boots" => 3
];
?>
<p>Our footwear:</p>
<?php
foreach ($footwear as $type => $brands):
?>
<p><?="We sell $brands brands of $type"?></p>
<?php
endforeach;
?>
