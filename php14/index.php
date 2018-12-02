<?php
function copyright()
{
  $date = 2011;
  $currentDate = date('Y');
  //patikriname ivesta data su dabartine data
  if ($date < $currentDate) {
    echo '&copy; ' . $date . '-' . date('Y');
  } elseif ($date >= $currentDate){
    echo '&copy; ' . $currentDate;
  }
}
//atvaizduojame data
echo copyright();
 ?>
