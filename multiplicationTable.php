<?php
  echo "<h1>1-100 Multiplication Table</h1><hr>";
  echo "<table><tr><td>#</td>";
  for($i = 1; $i <= 100; $i++)
  {
    echo "<td>" . $i . "</td>";
  }
  for($i = 1; $i <= 100; $i++)
  {
    echo "</tr><tr>";
    echo "<td>" . $i . "</td>";
    for($j = 1; $j <= 100; $j++)
    {
      echo "<td>" . $i * $j . "</td>";
    }
  }
  echo "</tr></table>";
 ?>
