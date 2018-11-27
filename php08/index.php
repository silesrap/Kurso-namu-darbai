<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <br>
    <?php

    $temp = [4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];

    $average = array_sum($temp) / count($temp);
    echo 'Vidutine:' .round($average).'<br><br>';

    $unikalus = array_unique($temp); // cia padariau, kad nesikartotu ta pati temperatura
    rsort($unikalus);
    $high5 = array_slice($unikalus, 0, 5);
    foreach ($high5 as $high) {
      echo $high .'<br>';
    };

    echo "<br>";

    // cia su pasikartojancia temperatura
    asort($temp);
    $low5 = array_slice($temp, 0, 5);
    foreach ($low5 as $low) {
      echo $low .'<br>';
    };
     ?>
  </body>
</html>
