<html>
<body>
<h1 align="center">Result</h1>
<?=
"<h2>Addition of {$_GET['first']} and {$_GET['second']}</h2>";
?>
<p><?=$_GET['first'] + $_GET['second'];?></p>
<a href="index.php">Reset</a>
</body>
</html>
