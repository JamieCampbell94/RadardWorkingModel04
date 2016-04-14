<?php
require_once('../database/connection.php');

$data = file_get_contents('php://input'); // Get any data sent to this file - special constant
$json = json_decode($data, true); // Convert JSON to PHP array

//This bit is saying only grab the $json from the randomText json pair so instead
//of putting both pairs in its only executes the bit the user types
$hello = $json['randomText'];

$stmt = $pdo->prepare('INSERT INTO chatLogTwo (message) VALUES(:name)');
$stmt->execute(array(':name' => $hello));

  # Affected Rows?
  echo $stmt->rowCount(); // 1


//best outside the if statement so user isn't stuck on a white blank page.
header("location: landing_page.php");
exit;


 ?>
