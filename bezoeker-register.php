<?php 
session_start();
include 'pagina-elementen\head.html';
?>

<body>
<?php 
include 'pagina-elementen\header.html';
    ?>
<?php 
include 'pagina-elementen\mainnavigatie.html';
?>
  <!-- register scherm -->

  <main id="register">
    <h2>Register</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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
include 'pagina-elementen\footer.html'
?>

</body>

</html>