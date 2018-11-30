<?php
function copyright()
{
  $date = 2030;
  $currentDate = date('Y');
  //patikriname ivesta data su dabartine data
  if ($date < $currentDate) {
    echo $date . '-' . date('Y');
  } elseif ($date > $currentDate){
    echo '&copy; ' . $currentDate;
  } else {
    echo '&copy; ' . $currentDate;
  }
}
//atvaizduojame data
echo copyright();
 ?>
