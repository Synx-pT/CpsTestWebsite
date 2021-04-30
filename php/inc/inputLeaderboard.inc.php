<?php 
  
$username = NULL;
$score = NULL;

include_once 'dbh.inc.php';

if(isset($_POST['username']) || isset($_POST['score'])) {
  $username = $_POST['username'];
  $score = $_POST['score'];
}

if ($username and $score != NULL) {
  $sql = "INSERT INTO `leaderboard` (`uid`, `Username`, `Score`) VALUES (NULL, '$username', '$score');";
  mysqli_query($conn, $sql);
}
  
include_once 'outputLeaderboard.inc.php';

/*
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
} 
*/