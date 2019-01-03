<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Leer rekenen</title>
  <link rel="icon" type="image/ico" href="afbeeldingen/logo.png" />
  <link rel="stylesheet" href="stylesheet.css">
</head>

<body>
<?php 
include 'functions\header.html';
    ?>
<?php 
include 'functions\mainnavigatie.html';
?>
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

  <?php 
include 'functions\footer.html'
?>

</body>

</html>