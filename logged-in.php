<?php 

include 'includes\head.html';
?>

<body>
<?php 
include 'includes\header.html';
    ?>
<?php 
require_once 'includes\mainnavigatie.php';
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