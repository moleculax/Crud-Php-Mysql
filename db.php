<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  'tuclave',
  'php_mysql_crud'
) or die(mysqli_erro($mysqli));

?>
