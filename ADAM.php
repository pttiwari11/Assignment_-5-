<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>ADAM_Number</title>
</head>

<body>
  <form method="post">
    Enter the number: <input type="number" name="number">
    <input type="submit" name="submit">
  </form>

</body>

</html>
<?php

if ($_POST) {
  $number = $_POST["number"];
  $square = pow($number, 2);
  $str_square = strval($square);
  $rev_square = strrev($str_square);
  $reverse = (int)$rev_square;
  $underroot = sqrt($reverse);
  $str_underroot = strval($underroot);
  $rev_underroot = strrev($str_underroot);
  $again_reverse = (int)$rev_underroot;

  if (isset($_POST["submit"])) {
    if ($again_reverse == $number) {
      echo "Number is ADAM";
    } else {
      echo "Number is not ADAM";
    }
  }
}

?>