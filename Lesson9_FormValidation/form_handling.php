<html>
	<body>
		<form method="post" action="">
			Your name:
			<br>
  		<input type="text" name="name">
 			<br><br>
  		What is the best thing about learning to code:
  		<br>
  		<input type="text" name="best">
  		<br><br>
  		<input type="submit" value="Submit Answers">
		</form>
    <div id="form-output">
    <p id="name"><?=$_POST['name']?>
    <p id="best"><?=$_POST['best']?>
    </div>
		<a href="index.php">Reset</a>
	</body>
</html>
    
