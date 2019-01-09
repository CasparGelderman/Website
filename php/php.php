
<?php 

$accountnaam = $_POST['accountnaam']; 
$wachtwoord = $_POST['wachtwoord'];



if (empty($_POST['accountnaam'])) {
echo 'Pleae fill in your accountname in order to log in. ';
} else {
  echo 'set';
}

if (empty($_POST['wachtwoord'])) {
  echo 'Pleae fill in your password in order to log in. ';
  } else {
    echo 'set';
  }
