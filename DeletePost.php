<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


$mysqli = new mysqli("mysql.eecs.ku.edu", "jack_mcclure", "Phohyei4", "jack_mcclure");

if($mysqli->connect_errno) {
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}

$query = "DELETE content FROM Post";

$checkbox = $_POST['checkbox'];
$i = 0;
while($i < count($checkbox))
{
  echo "In this while loop is where code would go to find the author_id and content associated with each checkbox marked and then delete them<br>";
  $i++;
}

 ?>
