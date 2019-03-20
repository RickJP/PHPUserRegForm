<?php 

  $db_user = "rick";
  $db_pass = "apache2k19";
  $db_name = "userAccounts";

  $db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>