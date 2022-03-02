<html>
<body>
<h1 align="center">Result</h1>
<?= "<p>Result of dividing {$_GET['dividend']} by {$_GET['divisor']}</p>"; ?>
<p><?=$_GET['dividend'] / $_GET['divisor'];?></p>
<a href="index.php">Reset</a>
</body>
</html>
