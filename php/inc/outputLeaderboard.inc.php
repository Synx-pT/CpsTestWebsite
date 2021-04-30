<?php

$sql = 
"SELECT 
    uid, Username, Score 
FROM 
    leaderboard 
ORDER BY 
    length(Score), Score
ASC";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data
  while($row = $result->fetch_assoc()) {
    echo $row['Username'] . " || " . $row['Score'] . "<br>" . "<br>";
  }
} else {
  echo "There are no results yet!";
}