<?php
  $q1 = $_POST["9+10"];
  $q2 = $_POST["7*8"];
  $q3 = $_POST["3/5of60"];
  $q4 = $_POST["derivative"];
  $q5 = $_POST["trains"];

  $correct = 0;
  $score = 0;

  if ($q1 == "19")
  {
    $correct++;
    $score += 20;
  }
  if ($q2 == "56")
  {
    $correct++;
    $score += 20;
  }
  if ($q3 == "36")
  {
    $correct++;
    $score += 20;
  }
  if ($q4 == "72x")
  {
    $correct++;
    $score += 20;
  }
  if ($q5 == "2.5 Hours")
  {
    $correct++;
    $score += 20;
  }


  echo "<h1>Quiz Results</h1><hr>";
  echo "<p>Total Correct Answers: " . $correct . " / 5</p>";
  echo "<p>Total Score: " . $score . "%</p>";
?>
