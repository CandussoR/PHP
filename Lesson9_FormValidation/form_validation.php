<?php
// Uses a function to check if input is right:
  function checkWord($input, $letter)
  {
    if (($_SERVER["REQUEST_METHOD"] === "POST") && strtolower($input[0]) !== $letter) {
      return "* This word must start with the letter $letter!";
    } else {
      return "";
    }
  }
?>

<h1>Time to Practice our ABCs</h1>
<form method="post" action="">
    Enter a word that starts with the letter "a":
    <br>
    <!—— Value is the word typed into the form, keeps getting printed. ——>
    <input type="text" name="a-word" id="a-word" value="<?= $_POST["a-word"];?>">
    <!<—— Prints the return value from function if error -->
    <p class="a-error"><?=checkWord($_POST['a-word'], "a");?></p>
    <br>

    <br>
    Enter a word that starts with the letter "b":
    <br>
    <input type="text" id="b-word" name="b-word" value="<?php echo $_POST['b-word'];?>">
    <p class="b-error"><?=checkWord($_POST['b-word'], "b");?></p>
    <br>
      
    <br>
    Enter a word that starts with the letter "c":
    <br>
    <input type="text" id="c-word" name="c-word" value="<?php echo $_POST['c-word'];?>">
    <p class="c-error"><?=checkWord($_POST['c_word'], "c");?></p>
    <br>

    <br>
    <input type="submit" value="Submit Words">
</form>
<div>
    <h3>"a" is for: <?= $_POST["a-word"];?><h3>
    <h3>"b" is for: <?= $_POST["b-word"];?><h3>
    <h3>"c" is for: <?= $_POST["c-word"];?><h3>
<div>
