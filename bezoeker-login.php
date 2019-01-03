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

  <!-- inlog scherm -->
  <main id="inloggen">
    <h2>Inloggen</h2>
    <form method="POST">
      <input type="text" name="emailaddress" placeholder="E-mail address"><br> <br>
      <input type="password" name="wachtwoord" placeholder="Wachtwoord"><br> <br>
      <input type="submit" name="log in" value="log in">
    </form>
  </main>

  <?php 
include 'functions\footer.html'
?>

</body>

</html>