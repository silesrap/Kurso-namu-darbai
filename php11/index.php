<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if (isset($_POST['submit']).$_POST['ilgis'] && $_POST['plotis']) {
          echo ($_POST['ilgis'] * $_POST['plotis']);
          exit();
        }
    ?>
    <form class='' action='<?php $_PHP_SELF; ?>' method='POST'>
      <input type='text' name='ilgis' placeholder='ilgis' value=''>
      <input type='text' name='plotis' placeholder='plotis' value=''>
      <input type="submit">
    </form>
  </body>
</html>
