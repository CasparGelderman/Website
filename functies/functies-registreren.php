<?php

include 'functies.php';
 
$registernaam = $_POST['naam'];
$registerwachtwoord = $_POST['wachtwoord'];
$registeraccountnaam = $_POST['accountnaam'];
$registerherhaalwachtwoord = $_POST['herhaalwachtwoord'];



function Registreren ($registernaam, $registerwachtwoord, $registeraccountnaam) { 
  global $pdo;


  try {
    $SQL = 'INSERT INTO Accounts(accountnaam, naam, wachtwoord) VALUES (:accountnaam, :naam, :wachtwoord)';
   $query = $pdo->prepare($SQL);
   
   $query -> execute (array($registeraccountnaam, $registernaam, $registerwachtwoord));
echo "did something";
    } catch  (PDOException $e) {
      echo $e->GetMessage();
     }
}

registreren ($registernaam, $registerwachtwoord, $registeraccountnaam);
      