<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $cities3 = [
        'Tokijas' => [13.6, 1868, 'Japonija'],
        'Vasingtonas' => [0.6, 1790, 'JAV'],
        'Maskva' =>[11.5, 1147, 'Rusija']
      ];
      $cities3['Londonas'] = [8.6, 43, 'Anglija'];

     ?>

     <ul>
       <li>Gyventoju skaicius: <?php echo $cities3['Londonas'][0]; ?> mln.</li>
       <li>Ikurtas: <?php echo $cities3['Londonas'][1]; ?> m.</li>
       <li>Salis: <?php echo $cities3['Londonas'][2]; ?></li>
     </ul>
  </body>
</html>
