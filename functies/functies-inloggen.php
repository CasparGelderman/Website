<?php 
include 'functies.php';

$accountnaam = $wachtwoord =  "";
$accountnaam = $_POST['accountnaam']; 
$wachtwoord = $_POST['wachtwoord'];


  function Inloggen ($accountnaam, $wachtwoord) {
global $pdo;

if (empty($accountnaam)) {
$GLOBALS['$error'] = 'Accountnaam ontbreekt.';
echo $GLOBALS['$error'];
header("Location: ../bezoeker-login.php");
} else { 
      if (empty($wachtwoord)) {
      $GLOBALS['$error'] = 'Wachtwoord ontbreekt.';
      echo $GLOBALS['$error'];
      } else { 
          if(!preg_match('/^[a-zA-Z]+$/', $accountnaam)) {
          $error = 'Accountnaam of wachtwoord klopt niet';
          echo $error;
          } else  { 
          $accountnaam = inloggenValidation($accountnaam);
          $wachtwoord = inloggenValidation($wachtwoord);
          $wachtwoord = hash('sha256', $wachtwoord);
              try { 
              $sql = 'SELECT * FROM Accounts WHERE accountnaam = :user';
              $query = $pdo -> prepare($sql);
              $query -> execute ([':user'=>$accountnaam]);
              $data =  $query -> fetch(PDO::FETCH_ASSOC);
                  if ($data['wachtwoord'] == $wachtwoord) {
                  echo 'works';
                  SESSION_START() ;
                  $_SESSION['accountnaam'] = $accountnaam;
                  } else {
                  session_destroy();
                  $GLOBALS['$error'] = 'Accountnaam of wachtwoord is niet goed.';
                  }
              } catch (PDOException $e) {
              echo $e->GetMessage();
              }
          }
      }
}
} 


inloggen($accountnaam, $wachtwoord);

