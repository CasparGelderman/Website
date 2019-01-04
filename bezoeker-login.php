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

  <!-- inlog scherm -->
  <main id="inloggen">
    <h2>Inloggen</h2>
    <form method="POST" action="php.php">
      <input type="text" name="emailaddress" placeholder="E-mail address"><br> <br>
      <input type="password" name="wachtwoord" placeholder="Wachtwoord"><br> <br>
      <input type="submit" name="log in" value="log in">
    </form>
  </main>

  <?php 
include 'pagina-elementen\footer.html'
?>



</body>

</html>