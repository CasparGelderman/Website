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
    <h2>Welcome, <?php
    
    echo $_POST['accountnaam'] ?> </h2>
   
  </main>

  <?php 
include 'pagina-elementen\footer.html'
?>



</body>

</html>