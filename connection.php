<?php
$connect = mysqli_connect('sql101.infinityfree.com', 'if0_38430744', 'RnLn0l47tRwv', 'if0_38430744_movies');

if (!$connect) {
  echo 'Error Code: ' . mysqli_connect_errno();
  echo 'Error Message: ' . mysqli_connect_error();
  exit;
}

?>
