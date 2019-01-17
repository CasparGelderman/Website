<?php 
include 'functies.php';

$accountnaam = $wachtwoord =  "";
$accountnaam = $_POST['accountnaam']; 
$wachtwoord = $_POST['wachtwoord'];


  function Inloggen ($accountnaam, $wachtwoord) {
global $pdo;

if (empty($accountnaam)) {
  $error = 'Accountnaam ontbreekt.';
echo $error;
} else { 
$accountnaam = inloggenValidation($accountnaam);
    if (empty($wachtwoord)) {
    $error = 'Wachtwoord ontbreekt.';
    echo $error;
    } else { 
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
            }
        } catch (PDOException $e) {
        echo $e->GetMessage();
      }
  }
}
  } 


inloggen($accountnaam, $wachtwoord);

