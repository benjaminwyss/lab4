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
  echo "<p>Total Score: " . $score . "%</p><br>";

  echo "<p>Question 1: What is 9 + 10?</p>";
  echo "<p>You answered: " . $q1 . "</p>";
  echo "<p>Correct answer: 19</p><br>";

  echo "<p>Question 2: What is 7 * 8?</p>";
  echo "<p>You answered: " . $q2 . "</p>";
  echo "<p>Correct answer: 56</p><br>";

  echo "<p>Question 3: What is 3/5 of 60?</p>";
  echo "<p>You answered: " . $q3 . "</p>";
  echo "<p>Correct answer: 36</p><br>";

  echo "<p>Question 4: What is the derivative of (6x) * (6x) with respect to x?</p>";
  echo "<p>You answered: " . $q4 . "</p>";
  echo "<p>Correct answer: 72x</p><br>";

  echo "<p>Question 5: Two trains, one starting at city A, and the other starting at city B are traveling towards each other at different speeds.<br>
              The train departing from city A is travelling at a speed of 70mph, while the train departing from city B is traveling at a speed of 50mph.<br>
              City A is 300 miles apart from city B. How much time will elapse before the two trains meet?</p>";
  echo "<p>You answered: " . $q5 . "</p>";
  echo "<p>Correct answer: 2.5 Hours</p>";
?>
