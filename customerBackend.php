<?php
  $css = file_get_contents("style.css");
  echo "<style>" . $css . "</style>";

  $username = $_POST["username"];
  $password = $_POST["password"];
  $animalFarms = $_POST["animalFarm"];
  $catchers = $_POST["catcherInTheRye"];
  $enders = $_POST["endersGame"];
  $shipping = $_Post["shipping"];

  echo "<h4>Welcome User " . $username . "</h4>";

?>
