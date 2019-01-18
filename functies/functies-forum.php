
<?php
session_start();
require_once 'functies.php';



function postPlaatsen($tekst, $unixtijd, $accountnaam, $categorie) {
global $pdo;


        try {
        $SQL = "INSERT INTO Posts (tekst, accountnaam, categorie, unixtijd) VALUES (:tekst,  :accountnaam,  :categorie, :unixtijd)";
        $query = $pdo->prepare($SQL);
        $query->execute([':tekst'=>$tekst, ':accountnaam'=>$accountnaam, ':categorie'=>$categorie, ':unixtijd'=>$unixtijd]);

        $_SESSION['error'] = 'Post succesvol gemaakt!';
         header("location: ../forumAlgemeen.php"); 

       } catch (PDOException $e) {
        echo $e->GetMessage();   
       } 
    }

$CheckOnErrors = false;
$ErrMsg = "";

if(empty($_POST['post'])) {
    $CheckOnErrors = true;
 
}   else {
    $post = nl2br(htmlentities($_POST['post']));
}

if (empty($_POST['categorie'])) { 
$CheckOnErrors = true;

} else { 
    $categorie = $_POST['categorie'];
}


// if (empty($_SESSION['accountnaam'])) { 
//     $CheckOnErrors = true;
//     $_SESSION['error'] = 'U moet eerst inloggen.';
// echo 'accountnaam niet gevonden';
//     } else { 
//         $accountnaam = $_SESSION['accountnaam'];
//     }
    $NAAM = $_SESSION['accountnaam'];
 $unixtijd = time();

 if(!$CheckOnErrors){
    postPlaatsen($post, $unixtijd, $NAAM, $categorie);
 }



// Functies voor het automatisch genereren van de forums uit de gegevens van de database 
function readPostsFromDatabaseProcenten() {
    global $pdo;
    try {
        $stmt = $pdo->prepare("SELECT * FROM Posts WHERE categorie = 'procenten'");
        $stmt->execute();
        
  $dataposts = $stmt-> fetchAll(PDO::FETCH_ASSOC);
  
        return $dataposts;
    } catch (PDOException $e) {
        echo "Could not fetch posts ".$e->getMessage();
    }
  }

  function readPostsFromDatabaseBreuken() {
    global $pdo;
    try {
        $stmt = $pdo->prepare("SELECT * FROM Posts WHERE categorie = 'breuken'");
        $stmt->execute();
        
  $dataposts = $stmt-> fetchAll(PDO::FETCH_ASSOC);
  
        return $dataposts;
    } catch (PDOException $e) {
        echo "Could not fetch posts ".$e->getMessage();
    }
  }

  
  function readPostsFromDatabaseAlgemeen() {
    global $pdo;
    try {
        $stmt = $pdo->prepare("SELECT * FROM Posts WHERE categorie = 'algemeen'");
        $stmt->execute();
        
  $dataposts = $stmt-> fetchAll(PDO::FETCH_ASSOC);
  
        return $dataposts;
    } catch (PDOException $e) {
        echo "Could not fetch posts ".$e->getMessage();
    }
  }

  function readPostsFromDatabaseTafels() {
    global $pdo;
    try {
        $stmt = $pdo->prepare("SELECT * FROM Posts WHERE categorie = 'tafels'");
        $stmt->execute();
        
  $dataposts = $stmt-> fetchAll(PDO::FETCH_ASSOC);
  
        return $dataposts;
    } catch (PDOException $e) {
        echo "Could not fetch posts ".$e->getMessage();
    }
  }

  function readPostsFromDatabaseBewerkingen() {
    global $pdo;
    try {
        $stmt = $pdo->prepare("SELECT * FROM Posts WHERE categorie = 'bewerkingen'");
        $stmt->execute();
        
  $dataposts = $stmt-> fetchAll(PDO::FETCH_ASSOC);
  
        return $dataposts;
    } catch (PDOException $e) {
        echo "Could not fetch posts ".$e->getMessage();
    }
  }
