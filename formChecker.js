function validateForm()
{
  let username = document.forms["bookstore"]["username"].value
  let password = document.forms["bookstore"]["password"].value
  let animalFarms = document.forms["bookstore"]["animalFarm"].value
  let catchers = document.forms["bookstore"]["catcherInTheRye"].value
  let enders = document.forms["bookstore"]["endersGame"].value
  let shipping = document.forms["bookstore"]["shipping"].value

  if (username == "")
  {
    alert("Please enter a non-empty username.")
    return false
  }
  if (password == "")
  {
    alert("Please enter a non-empty password.")
    return false
  }
  if (animalFarms == "")
  {
    alert("Please enter a non-empty quantity of Animal Farm Books (0 is Okay).")
    return false
  }

  if (isNaN(parseInt(animalFarms)))
  {
    alert("Please enter an integer quantity of Animal Farm Books (0 is Okay).")
    return false
  }
  if (parseInt(animalFarms) < 0)
  {
    alert("Please enter a non-negative quantity of Animal Farm Books (0 is Okay).")
    return false
  }
  if (parseInt(animalFarms) != animalFarms)
  {
    alert("Please enter a whole number quantity of Animal Farm Books (0 is Okay).")
    return false
  }

  if (isNaN(parseInt(catchers)))
  {
    alert("Please enter an integer quantity of The Catcher in the Rye Books (0 is Okay).")
    return false
  }
  if (parseInt(catchers) < 0)
  {
    alert("Please enter a non-negative quantity of The Catcher in the Rye Books (0 is Okay).")
    return false
  }
  if (parseInt(catchers) != catchers)
  {
    alert("Please enter a whole number quantity of The Catcher in the Rye Books (0 is Okay).")
    return false
  }

  if (isNaN(parseInt(enders)))
  {
    alert("Please enter an integer quantity of Ender's Game Books (0 is Okay).")
    return false
  }
  if (parseInt(enders) < 0)
  {
    alert("Please enter a non-negative quantity of Ender's Game Books (0 is Okay).")
    return false
  }
  if (parseInt(enders) != enders)
  {
    alert("Please enter a whole number quantity of Ender's Game Books (0 is Okay).")
    return false
  }

  if (shipping == "")
  {
    alert("Please select a shipping option.")
    return false
  }

  //all checks validated
  return true

}
