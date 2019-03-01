<?php
  $css = file_get_contents("style.css");
  echo "<style>" . $css . "</style>";

  $username = $_POST["username"];
  $password = $_POST["password"];
  $animalFarms = $_POST["animalFarm"];
  $catchers = $_POST["catcherInTheRye"];
  $enders = $_POST["endersGame"];
  $shipping = $_POST["shipping"];

  $animalFarmCost = $animalFarms * 10.00;
  $catcherCost = $catchers * 7.00;
  $enderCost = $enders * 5.00;


  echo "<h4>Welcome and thank you for your purchase " . $username . "!</h4>";
  echo "<p>Your password is: " . $password . "</p><p>Remember not to share your password with anyone!</p><hr>";
  echo "<h4>Your Receipt:</h4>";

  echo "<table><tr>";
  echo "<th>Purchase</th><th>Quantity</th><th>Cost Per Item</th><th>Subtotal</th></tr>";

  echo "<tr><th>Animal Farm</th>";
  echo "<td>" . $animalFarms . "</td>";
  echo "<td>$10.00</td>";
  echo "<td>$" . $animalFarmCost . ".00</td>";
  echo "</tr>";

  echo "<tr><th>The Catcher in the Rye</th>";
  echo "<td>" . $catchers . "</td>";
  echo "<td>$7.00</td>";
  echo "<td>$" . $catcherCost . ".00</td>";
  echo "</tr>";

  echo "<tr><th>Ender's Game</th>";
  echo "<td>" . $enders . "</td>";
  echo "<td>$5.00</td>";
  echo "<td>$" . $enderCost . ".00</td>";
  echo "</tr>";

  echo "<tr><th>Shipping</th>";

  if ($shipping == "50")
  {
    echo "<td>Overnight Shipping</td>";
  }
  if ($shipping == "5")
  {
    echo "<td>3-Day Shipping</td>";
  }
  if ($shipping == "0")
  {
    echo "<td>7-Day Free Shipping</td>";
  }

  echo "<td></td><td>$" . $shipping . ".00</td></tr>";

  echo "<tr><th>Total Cost</th><th></th><th></th>";
  echo "<th>$" . ($shipping + $enderCost + $catcherCost + $animalFarmCost) . ".00</th></tr>";

  echo "</table>";
?>

