<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


$mysqli = new mysqli("mysql.eecs.ku.edu", "jack_mcclure", "Phohyei4", "jack_mcclure");

if($mysqli->connect_errno) {
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}

$post = $_POST["post"];
$username = $_POST["username"];
$query = "SELECT user_id FROM Users WHERE user_id = '$username'";

if($post == "" || $username == "")
{
  header('Location: CreatePosts.html');
  exit;
}

else
{
  $sql = "INSERT INTO Posts (author_id, content) VALUES ('$username', '$post')";

  if($result = $mysqli->query($query))
  {
    if(mysqli_num_rows($result) > 0)
    {
      if($mysqli->query($sql) === TRUE)
      {
        echo "Post saved under the username: " . $username . "<br>";
      }
    }

    else
    {
      echo "You do not have a username set up yet. <br>";
      echo "<a href='http://people.eecs.ku.edu/~j369m094/CreateUser.html'>Head over here to set up a username.</a>";
    }
  }

}
 ?>
