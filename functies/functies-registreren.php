<?php

include 'functies.php';
 $registernaam = $registerwachtwoord = $registeraccountnaam = $registerherhaalwachtwoord = "";

$registernaam = $_POST['naam'];
$registerwachtwoord = $_POST['wachtwoord'];
$registeraccountnaam = $_POST['accountnaam'];
$registerherhaalwachtwoord = $_POST['herhaalwachtwoord'];



function Registreren ($registernaam, $registerwachtwoord, $registeraccountnaam, $registerherhaalwachtwoord) { 
  global $pdo;

if (empty($registernaam)) {
  echo 'Please enter a name';
} else {
  $registernaam = inloggenValidation($registernaam);
}

if (empty($registeraccountnaam)) {
  echo 'Please enter a name';
} else {
  $registeraccountnaam = inloggenValidation($registeraccountnaam);
}

if (empty($registerwachtwoord)) {
  echo 'Please enter a password';
} else { 
  if ($registerherhaalwachtwoord == $registerwachtwoord) {
    $registerwachtwoord = inloggenValidation($registerwachtwoord);
    $registerwachtwoord = hash('sha256', $registerwachtwoord);
  } else {
    echo 'Passwords don"t match';
  }
}

  try {
    $SQL = 'INSERT INTO Accounts(accountnaam, naam, wachtwoord) VALUES (:accountnaam, :naam, :wachtwoord)';
   $query = $pdo->prepare($SQL);
   
   $query -> execute (array($registeraccountnaam, $registernaam, $registerwachtwoord));
header('registered.php');
    } catch  (PDOException $e) {
      echo $e->GetMessage();
     }
}

registreren ($registernaam, $registerwachtwoord, $registeraccountnaam, $registerherhaalwachtwoord);



