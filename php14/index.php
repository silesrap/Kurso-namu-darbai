<?php
function copyright($date)
{

  $currentDate = date('Y');
  //patikriname ivesta data su dabartine data
  if ($date < $currentDate) {
    echo '&copy; ' . $date . '-' . date('Y');
  } else{
    echo '&copy; ' . $currentDate;
  }
}
//atvaizduojame data
echo copyright(2011);
 ?>
