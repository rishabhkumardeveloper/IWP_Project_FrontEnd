<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  $db_conn = mysqli_connect("localhost", "root", "", "iwp") or die("Connection Error!".mysqli_connect_error());
 // $db_conn = mysqli_connect("localhost", "root", "sreyan100", "test1") or die("Connection Error!".mysqli_connect_error());
?>
