<?php

include 'functies.php';
 $registernaam = $registerwachtwoord = $registeraccountnaam = $registerherhaalwachtwoord = $GLOBALS['error' ]=  "";

$registernaam = $_POST['naam'];
$registerwachtwoord = $_POST['wachtwoord'];
$registeraccountnaam = $_POST['accountnaam'];
$registerherhaalwachtwoord = $_POST['herhaalwachtwoord'];




function Registreren ($registernaam, $registerwachtwoord, $registeraccountnaam, $registerherhaalwachtwoord) { 
  global $pdo;
session_start();
$_SESSION['error'] = "";

if (empty($registernaam)) {
 $_SESSION['error'] =  'Naam is verplicht.';
 header("location: ../bezoeker-register.php");
    } else {

      
      if (empty($registeraccountnaam)) {
        $_SESSION['error'] =  'Accountnaam is verplicht. ';
        header("location: ../bezoeker-register.php");
        } else {

          
            if (empty($registerwachtwoord)) {
            $_SESSION['error'] = 'Wachtwoord is verplicht.';
            header("location: ../bezoeker-register.php");
            } else { 
              
                if (strlen($registeraccountnaam) >= 12) {
                $_SESSION['error'] = 'Accountnaam is te lang.';
                header("Location: ../bezoeker-register.php");
                } else {
                
                if (strlen($registernaam) >= 12) {
                 $_SESSION['error'] = 'Naam is te lang.';
                 header("Location: ../bezoeker-register.php");
                 } else {
                
                if (strlen($registerwachtwoord) >= 15) {
                $_SESSION['error'] = 'Wachtwoord is te lang.';
                header("Location: ../bezoeker-register.php");
                } else {
                

                  if(!preg_match('/^[a-zA-Z]+$/', $registernaam)) {
                    $_SESSION['error'] = 'Alleen letters zijn mogelijk in de naam';
                    header("location: ../bezoeker-register.php");
                  } else  { 

                      $registernaam = inloggenValidation($registernaam);
                      if(!preg_match('/^[a-zA-Z]+$/', $registeraccountnaam)) {
                        $_SESSION['error'] = 'Alleen letters zijn mogelijk in de accountnaam';
                        header("location: ../bezoeker-register.php");
                      } else  { 

                            $registeraccountnaam = inloggenValidation($registeraccountnaam);

                            if ($registerherhaalwachtwoord == $registerwachtwoord) {
                            $registerwachtwoord = inloggenValidation($registerwachtwoord);
                            $registerwachtwoord = hash('sha256', $registerwachtwoord);

                                try {
                                $SQL = 'INSERT INTO Accounts(accountnaam, naam, wachtwoord) VALUES (:accountnaam, :naam, :wachtwoord)';
                                $query = $pdo->prepare($SQL);
                                $query -> execute ( array($registeraccountnaam, $registernaam, $registerwachtwoord));
                                
                                
                                
                                } catch  (PDOException $e) {
                                echo $e->GetMessage();
                                $_SESSION['error'] = "Accountnaam bestaat al.";
                                header("location: ../bezoeker-register.php");
                                }

                            } else {
                                $_SESSION['error'] =  'Wachtwoorden komen niet overeen.';
                                header("location: ../bezoeker-register.php");
                            }
                      }
                  }
            }
        }
    }
}
        }
    }
}

 registreren ($registernaam, $registerwachtwoord, $registeraccountnaam, $registerherhaalwachtwoord);



