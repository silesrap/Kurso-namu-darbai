<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      function staciakampioPlotas($a, $b)
      {
        $plotas = $a * $b;
        return $plotas;
      }
      $ats = staciakampioPlotas(10, 20);
      echo $ats;
     ?>
  </body>
</html>
