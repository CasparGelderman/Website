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
  <!-- over ons -->
  <main id="overons">
  <h2> U bent uitgelogd.  </h2>
  </main>

  <?php 
$_SESSION['accountnaam'] = "";
  ?>

  <?php 
include 'includes\footer.html'
?>

</body>

</html>