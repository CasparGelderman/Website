<?php

include 'functies.php';
 

function Registreren () { 
  global $pdo;
$registernaam = $_POST['naam'];
$registerwachtwoord = $_POST['wachtwoord'];
$registeraccountnaam = $_POST['accountnaam'];
$registerHerhaalWachtwoord = $_post['herhaalwachtwoord'];

  try {
    $SQL = 'INSERT INTO Account(accountnaam, naam, wachtwoord) VALUES (:accountnaam, :naam, :wachtwoord)';
   $query = $pdo->prepare($SQL);
   
   $query -> execute (array($registeraccountnaam, $registernaam, $registerwachtwoord));
echo "did something";
    } catch  (PDOException $e) {
      echo $e->GetMessage();
          }
        }

        registreren ();
      