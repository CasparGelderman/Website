
<?php 
$accountnaam = $wachtwoord = $registerAccountNaam = $error = "";
$RegisterWachtwoord = "";
$accountnaam = $_POST['accountnaam']; 
$wachtwoord = $_POST['wachtwoord'];




  function LogInAccountnaam ($accountnaam) {
if (empty($accountnaam)) {
  $error = 'Accountnaam ontbreekt.';
echo $error;
} else { 

  $accountnaam = trim($accountnaam);
  $accountnaam = htmlspecialchars($accountnaam);
  echo $accountnaam;
}  
}

  logInAccountnaam($accountnaam);

  function LogInWachtwoord ($wachtwoord) {
    if(empty($wachtwoord)) {
      $error = "Wachtwoord ontbreekt.";
      echo $error;
    } else {
      $wachtwoord = trim($wachtwoord);
      $wachtwoord = password_hash($wachtwoord, PASSWORD_BCRYPT);
  echo $wachtwoord;
  }
}
  //     $stmt = $pdo-> prepare("select * FROM accounts WHERE wachtwoord = ?")
  //     $stmt-> execute($wachtwoord);
  //     $user = $stmt->fetch();
  //   }

  //   if ($user) ) {
  //     assword_verify($password, $databasepassword)
  //    // get logged in, session start

  //   } else { 
  //     $error = 'Verkeerd wachtwoord.';
  //   }
  
  // }

  LogInWachtwoord($wachtwoord);





// function registerAccountNaam ($RegisterAccountNaam) {
// if (!preg_match('/^[a-zA-Z0-9\s]+$/', $accountnaam)) {
//     $error = 'Het accountnaam kan alleen letters, nummers en spaties bevatten.' 
// } else { 

// }
// }

// function registerWachtwoord ($RegisterWachtwoord) {
//   if (strlen($RegisterWachtwoord) < 8) {
//     $error = 'Het wachtwoord moet langer zijn.'
//   } 
// }


// function DataBaseConnectie () { 
// $host = 'localhost';
// $db = 'LeerRekenenDatabase';
// $user = 'user';
// $pass = 'pass';


//   try { 
// $dbo = new PDO("mysql:host=$host;dbname=$db"; $user, $pass);

//   } catch (PDOException $e) {
//     print "Error!: " $e->getMessage() . "<br/>";
//     die();
//   }
// }




?>
