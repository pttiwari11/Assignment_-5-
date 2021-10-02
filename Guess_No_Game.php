<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Guess_No_Game</title>
  <style>
    input {
      width: 10rem;
      text-align: center;
    }
  </style>
</head>

<body>
  <form method="post">
    <label for="Guessing">Guess a number between 1-100:</label>
    <input type="number" name="name" min="1" max="100" />
    <input style="width: fit-content" type="submit" name="submit" value="check" />
  </form>

</body>

</html>
<?php

  if ($_POST) {
    $n = $_POST["name"];
  }
  $r = rand(1, 100);

  echo "<br>";

  if (isset($_POST["submit"])) {


    if ($n == $r) {
      echo "Guess is matched!";
    } elseif ($n > $r) {
      echo "Guess is Higher";
    } else {
      echo "Guess is Low";
    }
  }

  ?>