
<?php 

$accountnaam = $_POST['accountnaam']; 
$wachtwoord = $_POST['wachtwoord'];



if (empty($accountnaam)) {
header('location: http://localhost/index.php');
} else {
  header('location: http://localhost/logged-in.php');

}
?>