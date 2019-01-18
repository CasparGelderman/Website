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

  <!-- inlog scherm -->
  <main id="inloggen">
    <h2>Inloggen</h2>
    <p> <?php
    if (!empty( $_SESSION['error'])) {
    echo  $_SESSION['error'];
    } ?> </p> <br>
    <form method="POST" action="functies/functies-inloggen.php">
      <input type="text" name="accountnaam" maxlength="12" placeholder="Account naam"><br> <br>
      <input type="password" name="wachtwoord" maxlength="15" placeholder="Wachtwoord"><br> <br>
      <input type="submit" name="login" value="login">
    </form>
  </main>

  
  <?php 
include 'includes\footer.html'
?>


</body>

</html>