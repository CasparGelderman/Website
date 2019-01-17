<?php

include 'functies.php';
 $registernaam = $registerwachtwoord = $registeraccountnaam = $registerherhaalwachtwoord = $GLOBALS['error' ]=  "";

$registernaam = $_POST['naam'];
$registerwachtwoord = $_POST['wachtwoord'];
$registeraccountnaam = $_POST['accountnaam'];
$registerherhaalwachtwoord = $_POST['herhaalwachtwoord'];




function Registreren ($registernaam, $registerwachtwoord, $registeraccountnaam, $registerherhaalwachtwoord) { 
  global $pdo;

if (empty($registernaam)) {
  $error =  'Please enter a name';
 echo $error;
    } else {

      
      if (empty($registeraccountnaam)) {
        $error =  'Please enter an account name';
        echo $error;
        } else {

          
            if (empty($registerwachtwoord)) {
            $error = 'Please enter a password';
            echo $error;
            } else { 
              
                  
                  if(!preg_match('/^[a-zA-Z]+$/', $registernaam)) {
                  $error = 'Alleen letters zijn mogelijk in de naam';
                  echo $error;
                  } else  { 

                      $registernaam = inloggenValidation($registernaam);
                      if(!preg_match('/^[a-zA-Z]+$/', $registeraccountnaam)) {
                      $error = 'Alleen letters zijn mogelijk in de accountnaam';
                      echo $error;
                      } else  { 

                            $registeraccountnaam = inloggenValidation($registeraccountnaam);
                            if ($registerherhaalwachtwoord == $registerwachtwoord) {
                            $registerwachtwoord = inloggenValidation($registerwachtwoord);
                            $registerwachtwoord = hash('sha256', $registerwachtwoord);

                                try {
                                $SQL = 'INSERT INTO Accounts(accountnaam, naam, wachtwoord) VALUES (:accountnaam, :naam, :wachtwoord)';
                                $query = $pdo->prepare($SQL);
                                $query -> execute ( array($registeraccountnaam, $registernaam, $registerwachtwoord));
                                echo ' - GELUKT - ';
                                
                                
                                } catch  (PDOException $e) {
                                echo $e->GetMessage();
                                $error = "Registreren gefaalt";
                                echo $error;
                                }

                            } else {
                            $error =  'Passwords don"t match';
                            echo $error ;
                            }
                      }
                  }
            }
        }
    }
} 

 registreren ($registernaam, $registerwachtwoord, $registeraccountnaam, $registerherhaalwachtwoord);



