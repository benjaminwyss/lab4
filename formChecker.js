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

}
