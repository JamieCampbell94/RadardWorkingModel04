<?php
  require_once('../database/connection.php');

  $stmt = $pdo->prepare('SELECT time, message FROM chatLogTwo');
  $stmt->execute();


  while($row = $stmt->fetchObject()) {
    print date('H:i:s', strtotime($row->time)). ' - '. $row->message .'<br />' ;
    }

 ?>
