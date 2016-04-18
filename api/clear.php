<?php
  // Sources in connection to database
  require_once('../database/connection.php');
  //pdo sql statement to drop table from database
  $st = $pdo->prepare('DROP TABLE chatLoger');
  $st->execute();

 ?>
