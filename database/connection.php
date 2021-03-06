<?php
/** mysql hostname **/
$hostname = 'localhost';

/** mysql username **/
$username = 'root';

/** mysql password **/
$password = 'root';

/** database name **/
$dbname = 'chat';

try {
  $pdo = new PDO('mysql:host=localhost;', $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //creates database if it doesnt already exist
  $pdo->query("CREATE DATABASE IF NOT EXISTS $dbname");
  $pdo->query("use $dbname");

  //creates table if it doesnt already exist
  $sqld = "CREATE TABLE IF NOT EXISTS `chatLoger` (
    `userName` int(10) NOT NULL,
    `message` varchar(140) NOT NULL,
    `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
  )";

  //executes table creation
  $pdo->exec($sqld);

         $dbh = null;
         }

  catch(PDOException $e)
    {
      echo $e->getMessage();
    }


?>
