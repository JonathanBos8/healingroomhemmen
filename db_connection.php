<?php
  $user = 'root';
  $pass = '';
  $db = 'db-connection';

  $db = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");
  echo"yes";
?>
