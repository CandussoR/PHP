<?php
$drinks = ["Americano" => 2, "Machiato" => 2.50, "Tea" => 1.70, "Hot chocolate" => 2.50];
$pastries = ["Pain au chocolat", "Croissant", "Bear Claw", "Charlotte"];
?>

<h1>Welcome to the Repetitive Cafe</h1>

<h3>Drinks!</h3>
<ul>
<?php
foreach ($drinks as $name => $price):
?>
<li><?=$name . " ($price €)"?></li>
<?php
endforeach;
?>
</ul>

<h3>Pastries! ($2 each)</h3>
<ul>
<?php
for ($i=0; $i < count($pastries); $i++):
?>
<li><?=$pastries[$i]?></li>
<?php
endfor;
?>
</ul>
