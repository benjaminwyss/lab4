<?php
  $css = file_get_contents("style.css");
  echo "<style>" . $css . "</style>";

  $username = $_POST["username"];
  $password = $_POST["password"];
  $animalFarms = $_POST["animalFarm"];
  $catchers = $_POST["catcherInTheRye"];
  $enders = $_POST["endersGame"];
  $shipping = $_Post["shipping"];

  echo "<h4>Welcome and thank you for your purchase " . $username . "!</h4>";
  echo "<p>Your password is: " . $password . "</p><p>Remember not to share your password with anyone!</p><hr>";
  echo "<h4>Your Receipt:</h4>";

  echo "<table><tr>";
  echo "<th>Purchase</th><th>Quantity</th><th>Cost Per Item</th><th>Subtotal</th></tr>";

  echo "<tr><th>Animal Farm</th></tr>";

  echo "<tr><th>The Catcher in the Rye</th></tr>";

  echo "<tr><th>Ender's Game</th></tr>";

  echo "</table>";
?>
