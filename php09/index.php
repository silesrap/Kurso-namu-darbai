<!DOCTYPE html>
<html lang='lt' dir='ltr'>
  <head>
    <meta charset='utf-8'>
    <title></title>
  </head>
  <body>
    <?php

    $ceu = [
      'Italija' => 'Roma',
      'Liuksemburgas' => 'Liuksemburgas',
      'Belgija' => 'Briuselis',
      'Danija' => 'Kopenhaga',
      'Suomija' => 'Helsinkis',
      'Prancūzija' => 'Paryžius',
      'Slovakija' => 'Bratislava',
      'Slovenija' => 'Liublijana',
      'Vokietija' => 'Berlynas',
      'Graikija' => 'Atėnai',
      'Airija' => 'Dublinas',
      'Nyderlandai' => 'Amsterdamas',
      'Portugalija' => 'Lisabona',
      'Ispanija' => 'Madridas',
      'Švedija' => 'Stokholmas',
      'Didžioji Britanija' => 'Londonas',
      'Kipras' => 'Nikosija',
      'Lietuva' => 'Vilnius',
      'Čekija' => 'Praha',
      'Estija' => 'Talinas',
      'Vengrija' => 'Budapeštas',
      'Latvija' => 'Ryga',
      'Malta' => 'Valeta',
      'Austrija' => 'Viena',
      'Bulgarija' => 'Sofija',
      'Austrija' => 'Viena',
      'Rumunija' => 'Bukareštas',
      'Lenkija' => 'Varšuva',
    ];

    echo "<br>";

    asort($ceu);
    foreach ($ceu as $valstybe => $sostine) {
      echo "$valstybe - $sostine <br>";
    };
     ?>
  </body>
</html>
