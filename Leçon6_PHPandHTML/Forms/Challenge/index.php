<html>
<body>

<h1>Addition calculator</h1>
  <form method="get" action="addition.php">
    First number : <br>
    <input type="number" name="first">
    <br>
    Second number : <br>
    <input type="number" name="second">
    <br>
    <input type="submit" value="Submit">
  </form>
  <br>

<h1>Division calculator</h1>
  <form method="get" action="division.php">
    Dividend : <br>
    <input type="number" name="dividend">
    <br>
    Divisor : <br>
    <input type="number" name="divisor">
    <br>
    <input type="submit" value="Submit">
  </form>
<br>

<h1>Hypotenuse calculator</h1>
  <form method="get" action="hypotenuse.php">
    First Side : <br>
    <input type="number" name="side1">
    <br>
    Other Side : <br>
    <input type="number" name="other">
    <br>
    <input type="submit" value="Find Hypo">
    <br>
  </form>

  //Making use of the formaction attribute to combine the forms.
<h1>One size fits all</h1>
  <form action="addition.php" method="get">
    First Number : <input type="number" name = "first">
    <br>
    Second Number : <input type="number" name = "second">
    <br>
    Numerator : <input type="number" name="dividend">
    <br>
    Denominator : <input type="number" name="divisor">
    <br>
  <input type="submit" value="Add">
  <input type="submit" formaction="division.php" value="Divide">
  <br>
<a href="index.php">Reset</a>

</body>
</html>
