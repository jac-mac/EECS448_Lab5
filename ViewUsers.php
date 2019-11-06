<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


$mysqli = new mysqli("mysql.eecs.ku.edu", "jack_mcclure", "Phohyei4", "jack_mcclure");

if($mysqli->connect_errno) {
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}


$query = "SELECT user_id FROM Users";


if($result = $mysqli->query($query))
{
  echo "<table>";
  echo "<th> USER_ID </th>";
    while($row = $result->fetch_assoc())
    {
      echo "<tr><td>" . $row["user_id"] . "</td></tr>";
    }

echo "<table>";
}

$mysqli->close();
 ?>
