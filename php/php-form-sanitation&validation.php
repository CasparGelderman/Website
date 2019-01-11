<?php 

// register validation 
$accountnaam = $_POST['accountnaam'];
$naam = $_POST['naam'];
$wachtwoord = $_POST['wachtwoord'];
$herhaalwachtwoord = $_POST['herhaalwachtwoord'];


if (empty($accountnaam)) {
  echo 'Vul alle velden in.';
  header('location: http://localhost/bezoeker-login.php');
  } else {
    $accountnaam = sanitize_data($accountnaam);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }

  if (empty($naam)) {
    echo 'Vul alle velden in.';
    header('location: http://localhost/bezoeker-login.php');
    } else {
      $naam = sanitize_data($naam);
      if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed"; 
      }
    } 
  
    if (empty($wachtwoord)) or empty($herhaalwachtwoord)) {
      echo 'Vul alle velden in. ';
      header('location: http://localhost/bezoeker-login.php');
      } else {
        $wachtwoord = sanitize_data($wachtwoord);
        $herhaalwachtwoord = sanitize_data($herhaalwachtwoord)
      } 

// idee hier: functions die alles doorlopen wat nodig is. herhalen de functies. 


// log in sanitation 
function sanitize_data ($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;

echo "$accountnaam, $naam, $wachtwoord, $herhaalwachtwoord HALLO"

//
}