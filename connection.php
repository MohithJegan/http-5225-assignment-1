<?php
$connect = mysqli_connect('sql107.infinityfree.com', 'if0_38425702', '6JfNUyyvX5c6v', 'if0_38425702_movies');

if (!$connect) {
  echo 'Error Code: ' . mysqli_connect_errno();
  echo 'Error Message: ' . mysqli_connect_error();
  exit;
}

?>
