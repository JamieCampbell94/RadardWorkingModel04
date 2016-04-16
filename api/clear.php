<?php
  require_once('../database/connection.php');

  $st = $pdo->prepare('DROP TABLE chat');
  $st->execute();

 ?>
