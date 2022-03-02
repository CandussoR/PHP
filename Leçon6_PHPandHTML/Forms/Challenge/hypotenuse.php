<html>
<body>
<h1 align="center">Hypotenuse Found</h1>
<?= "<p>Given the two sides of {$_GET['side1']} and {$_GET['other']},
      hypotenuse rounded to two decimals is </p>";?>
<p><?=round(sqrt($_GET['side1'] ** 2 + $_GET['other'] ** 2), 2);?></p>
<a href="index.php">Reset</a>
</body>
</html>
