<?php 
include 'functies.php'; // hier staat de functie inloggenValidation in 

$accountnaam = $wachtwoord =  "";
$accountnaam = $_POST['accountnaam']; 
$wachtwoord = $_POST['wachtwoord'];


  function Inloggen ($accountnaam, $wachtwoord) {
global $pdo;
session_start();
$_SESSION['error'] = "";

if (empty($accountnaam)) {
    $_SESSION['error'] = 'Accountnaam ontbreekt.';
header("Location: ../bezoeker-login.php");
} else { 

        if (empty($wachtwoord)) {
        $_SESSION['error'] = 'Wachtwoord ontbreekt.';
        header("Location: ../bezoeker-login.php");
        } else { 

            if(!preg_match('/^[a-zA-Z]+$/', $accountnaam)) {
            $_SESSION['error'] = 'Accountnaam of wachtwoord klopt niet';
            header("Location: ../bezoeker-login.php");
            } else  { 

                    if (strlen($accountnaam) >= 12) {
                    $_SESSION['error'] = 'Accountnaam of wachtwoord klopt niet';
                    header("Location: ../bezoeker-login.php");
                    } else {

                            if (strlen($wachtwoord) >= 12) {
                            $_SESSION['error'] = 'Accountnaam of wachtwoord klopt niet';
                            header("Location: ../bezoeker-login.php");
                            } else {

                                $accountnaam = inloggenValidation($accountnaam);
                                $wachtwoord = inloggenValidation($wachtwoord);
                                $wachtwoord = hash('sha256', $wachtwoord);

                                try { 
                                $sql = 'SELECT * FROM Accounts WHERE accountnaam = :user';
                                $query = $pdo -> prepare($sql);
                                $query -> execute ([':user'=>$accountnaam]);
                                $data =  $query -> fetch(PDO::FETCH_ASSOC);

                                     if ($data['wachtwoord'] == $wachtwoord && $data['accountnaam'] == $accountnaam ) {
                                     echo 'works';
                                    $_SESSION['accountnaam'] = $accountnaam;
                                    $_SESSION['error']= 'Inloggen gelukt!';
                                    header("Location: ../bezoeker-login.php");
                                    } else {
                                    header("Location: ../bezoeker-login.php");
                                    $_SESSION['error'] = 'Accountnaam of wachtwoord is niet goed.';
                                    }

                                } catch (PDOException $e) {
                                echo $e->GetMessage();
                                }
                            }
                    }
            }
        }
    }
}

 


 inloggen($accountnaam, $wachtwoord);

