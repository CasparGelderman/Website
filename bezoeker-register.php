<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Leer rekenen</title>
  <link rel="icon" type="image/ico" href="afbeeldingen/logo.png" />
  <link rel="stylesheet" href="stylesheet.css">
</head>

<body>
  <header>
    <img class="logo" src="afbeeldingen/logo.png" alt="LOGO">
    <h2>Leerrekenen.nl</h2>
  </header>

  <nav id="mainnav">
    <ul>
      <li>
        <a href="index.html">Home</a>
      </li>
      <li>
        <a href="Video's.html">Video's</a>
        <ul class="submenu">
          <li>
            <a href="Video's.html#OptellenAftrekken">Optellen en aftrekken</a>
          </li>
          <li>
            <a href="Video's.html#Tafels">Tafels</a>
          </li>
          <li>
            <a href="Video's.html#Breuken">Breuken</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="forum.html">Forum</a>
      </li>
      <li>
        <a href="over-ons.html">Over ons</a>
      </li>
      <li>
        <a href="bezoeker-login.html">Bezoeker</a>
        <ul class="submenu">
          <li>
            <a href="bezoeker-login.html">Log in</a>
          </li>
          <li>
            <a href="bezoeker-register.html">Registreren</a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>

  <!-- register scherm -->

  <main id="register">
    <h2>Register</h2>
    <form method="POST">
      <label for="email">E-mail address</label>
      <input type="text" name="emailaddress" id="email" placeholder="E-mail address"><br> <br>

      <label for="wachtwoord"> Wachtwoord </label>
      <input type="password" id="wachtwoord" name="wachtwoord" placeholder="Wachtwoord"><br>

      <label for="herhaalwachtwoord"> Herhaal wachtwoord </label>
      <input type="password" id="herhaalwachtwoord" name="wachtwoord" placeholder="Herhaal wachtwoord"><br><br>

      <input type="submit" name="Registreren" value="Registreren">
    </form>
  </main>

  <footer>
    <p> &copy; Caspar Gelderman en Sara Li Wijnia (2018)</p>
  </footer>

</body>

</html>