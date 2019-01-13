
<?php 

$accountnaam = $_POST['accountnaam']; 
$wachtwoord = $_POST['wachtwoord'];

$error='';

if (empty($_POST['accountnaam'])) {
echo 'Pleae fill in your accountname in order to log in. ';
header('location: http://localhost/bezoeker-login.php');
} else {
  echo 'set';
}

if (empty($_POST['wachtwoord'])) {
  echo 'Pleae fill in your password in order to log in. ';
  header('location: http://localhost/bezoeker-login.php');
  } else {
    echo 'set';
  }




  // $servername = "localhost";
  // $username = "username";
  // $password = "password";
  // $databasename = "websiteDatabase";


  // try {
  //   $conn = new PDO
  // }


return $html;

}

?>
