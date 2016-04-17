<?php
  //Locates database connection
  require_once('../database/connection.php');

  //pdo sql select statement for chat log contents
  $stmt = $pdo->prepare('SELECT time, message FROM chatLoger');
  $stmt->execute();

  //while loop to print time and message for each chat entry
  while($row = $stmt->fetchObject()) {
    print date('H:i:s', strtotime($row->time)). ' - '. $row->message .'<br />' ;
    }

 ?>
