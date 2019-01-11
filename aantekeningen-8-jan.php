<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>$Title$</title>
</head>
<body>
$END$

<?php
echo '<pre>';
print_r(PDO::getAvailableDrivers());
echo '</pre>'

/* vergeet niet ConnectionPooling=0; anders werkt de database connectie niet */



/* aantekeningen toets op. 8 */
try {
$query = $pdo-> prepare("INSERT INTO gebruikers(gebruikersnaam, wachtwoord) values(?, ?)");
$query -> execute(array($gebruiker, $wachtwoord);
} catch (PDOexception $e) {
    echo "Er is iets misgegaan. Foutmelding is $E";
}

/* aantekening toets op. 9 */
in $_session doe je je gegevens

SESSION_START();
$_SESSION[ 'school']=' HAN - ICA';
$_SESSION['opleiding']='web development';


/* aantekeningen toets opgave 10 */

function pauzeren ($seconden = 1) {
    if ($seconden > 10 ){
        $seconden = 10;
    }
    $klaar = time()+$seconden

    while (time() < $klaar) { 
        // even wachten 
    }
}

pauzeren(5);













?>
</body>
</html>