<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


$mysqli = new mysqli("mysql.eecs.ku.edu", "jack_mcclure", "Phohyei4", "jack_mcclure");

if($mysqli->connect_errno) {
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}
$username = $_POST["selectUser"];
$query = "SELECT content FROM Posts WHERE author_id='$username'";

if($result = $mysqli->query($query))
{
  echo "<table>";
  echo "<th>Posts made by user: " . $username . "<th>";

  while($row = $result->fetch_assoc())
  {
    echo "<tr><td>" . $row["content"] . "</td></tr>";
  }

  echo "</table>";
}

 ?>
