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
    <h2>Welcome, <?php
    
    echo $_POST['accountnaam'] ?> </h2>
   
  </main>

  <?php 
include 'includes\footer.html'
?>



</body>

</html>