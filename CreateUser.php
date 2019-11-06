<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


$mysqli = new mysqli("mysql.eecs.ku.edu", "jack_mcclure", "Phohyei4", "jack_mcclure");

if($mysqli->connect_errno) {
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}

$username = $_POST["username"];
$query = "SELECT user_id FROM Users
                    WHERE user_id = '$username'";

//$result = $mysqli->query($query);

if($username == "")
{
  header('Location: CreateUser.html');
  exit;
}

else
{
  $sql = "INSERT INTO Users (user_id) VALUES ('$username')";

  if($result = $mysqli->query($query))
  {
    if(mysqli_num_rows($result) > 0)
    {
      echo "User, " . $username . ", already exists.<br>";
    }

    else
    {
      if($mysqli->query($sql) === TRUE)
      {
        echo "User, " . $username . ", entered into database. <br>";
      }
    }
  }
}

$mysqli->close();

?>
