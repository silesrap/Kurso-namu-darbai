<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      <?php
      $cities4 = ['Tokijas', 'Vasingtonas', 'Maskva', 'Londonas'];

      for ($i=0; $i < count($cities4); $i++) {
        echo '<li>' . $cities4[$i] . '</li>';
      }
       ?>
    </ul>
    <br>

    <ul>
      <?php
      foreach ($cities4 as $city) {
        echo '<li>' . $city . '</li>';
      }
       ?>
    </ul>


  </body>
</html>
