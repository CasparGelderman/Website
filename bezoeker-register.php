<?php 
session_start();
include 'includes\head.html';
?>

<body>
<?php 
include 'includes\header.html';
    ?>
<?php 
include 'includes\mainnavigatie.html';
?>
  <!-- register scherm -->

  <main id="register">
    <h2>Registreren</h2>
    <form method="POST" action="php/php-form-sanitation&validation.php">
<br>
    <label for="accountnaam"> Account naam*</label>
    <input type="text" name="accountnaam" id="accountnaam" placeholder="Account name"> <br> <br> 

      <label for="naam">Naam*</label> <br>
      <input type="text" name="naam" id="naam" placeholder="Naam"><br> <br> 

      <label for="wachtwoord"> Wachtwoord* </label> 
      <input type="password" id="wachtwoord" name="wachtwoord" placeholder="Wachtwoord"><br> <br>
      <label for="herhaalwachtwoord"> Herhaal wachtwoord* </label>
      <input type="password" id="herhaalwachtwoord" name="herhaalwachtwoord" placeholder="Herhaal wachtwoord"><br><br> <br>

      <input type="submit" name="Registreren" value="Registreren">
    </form>
  </main>

  <?php 
include 'includes\footer.html'
?>

</body>

</html>