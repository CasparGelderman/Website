<?php

include 'functies.php';
 $registernaam = $registerwachtwoord = $registeraccountnaam = $registerherhaalwachtwoord = $error =  "";

$registernaam = $_POST['naam'];
$registerwachtwoord = $_POST['wachtwoord'];
$registeraccountnaam = $_POST['accountnaam'];
$registerherhaalwachtwoord = $_POST['herhaalwachtwoord'];



function Registreren ($registernaam, $registerwachtwoord, $registeraccountnaam, $registerherhaalwachtwoord) { 
  global $pdo;

if (empty($registernaam)) {
  $error =  'Please enter a name';
} else {
  $registernaam = inloggenValidation($registernaam);
}

if (empty($registeraccountnaam)) {
  $error =  'Please enter a name';
} else {
  $registeraccountnaam = inloggenValidation($registeraccountnaam);
}

if (empty($registerwachtwoord)) {
  $error = 'Please enter a password';
} else { 
  if ($registerherhaalwachtwoord == $registerwachtwoord) {
    $registerwachtwoord = inloggenValidation($registerwachtwoord);
    $registerwachtwoord = hash('sha256', $registerwachtwoord);
  } else {
    $error =  'Passwords don"t match';
    header('.../bezoeker-register.php');
  }
}

  try {
    $SQL = 'INSERT INTO Accounts(accountnaam, naam, wachtwoord) VALUES (:accountnaam, :naam, :wachtwoord)';
   $query = $pdo->prepare($SQL);
   
   $query -> execute (array($registeraccountnaam, $registernaam, $registerwachtwoord));
   
header('registered.php');
    } catch  (PDOException $e) {
      echo $e->GetMessage();
      $error = "Registreren gefaalt";
     }
}

registreren ($registernaam, $registerwachtwoord, $registeraccountnaam, $registerherhaalwachtwoord);



