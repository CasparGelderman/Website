<?php 
databaseconnectie(); 

$accountnaam = $wachtwoord = $registerAccountNaam = $error = "";
$RegisterWachtwoord = "";
$accountnaam = $_POST['accountnaam']; 
$wachtwoord = $_POST['wachtwoord'];


function inloggen () { 
global $pdo;






}



  function Inloggen ($accountnaam, $wachtwoord) {
global $pdo;

if (empty($accountnaam)) {
  $error = 'Accountnaam ontbreekt.';
echo $error;
} else { 
$accountnaam = inloggenValidation($accountnaam);

$stmt $pdo->prepare('SELECT accountnaam FROM Accounts WHERE name = ?');
$stmt -> execute ([$accountnaam]);
$user = $stmt->fetch();
if ( $user == $accountnaam ) {

}
}


if (empty($wachtwoord))
$error = 'Wachtwoord ontbreekt.';
echo $error;
else { 
  $wachtwoord = inloggenValidation($wachtwoord);
  

}
}  





  function LogInWachtwoord ($wachtwoord) {
    if(empty($wachtwoord)) {
      $error = "Wachtwoord ontbreekt.";
      echo $error;
    } else {
  logInWachtwoordValidation($wachtwoord);
  echo $wachtwoord;
  }
}



inloggenValidation ($data) { 
  $data = trim($data);
  $data = htmlspecialchars($data);
  }










?>
