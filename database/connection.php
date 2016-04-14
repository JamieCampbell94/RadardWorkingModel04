<?php
/** mysql hostname **/
$hostname = 'localhost';

/** mysql username **/
$username = 'root';

/** mysql password **/
$password = 'root';

try {
  $pdo = new PDO('mysql:host=localhost;dbname=Chat', $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  /*** close the database connection ***/
       $dbh = null;
       }

  catch(PDOException $e)
    {
      echo $e->getMessage();
    }
  

?>
