<?php

include 'functies.php';
 
$registernaam = $_POST['naam'];
$registerwachtwoord = $_POST['wachtwoord'];
$registeraccountnaam = $_POST['accountnaam'];
$registerHerhaalWachtwoord = $_post['herhaalwachtwoord'];

echo $registernaam, $registerwachtwoord, $registeraccountnaam

function Registreren ($registernaam, $registerwachtwoord, $registeraccountnaam, $registerherhaalwachtwoord) { 
  global $pdo;


  try {
    $SQL = 'INSERT INTO Account(accountnaam, naam, wachtwoord) VALUES (:accountnaam, :naam, :wachtwoord)';
   $query = $pdo->prepare($SQL);
   
   $query -> execute (array($registeraccountnaam, $registernaam, $registerwachtwoord));
echo "did something";
    } catch  (PDOException $e) {
      echo $e->GetMessage();
     }
}

registreren ($registernaam, $registerwachtwoord, $registeraccountnaam, $registerherhaalwachtwoord);
      