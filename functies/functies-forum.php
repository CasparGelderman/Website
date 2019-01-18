
<?php
session_start();
require_once 'functies.php';
$categorie = $accoutnaam = $tekst = "";


function postPlaatsen($tekst, $unixtijd, $accountnaam, $categorie) {
global $pdo;
if (empty($categorie)) {
    $_SESSION['error'] = 'Categorie moet geselecteerd zijn.  ';
    header("Location: ../forumAlgemeen.php");
} else {
if (empty($tekst)) {
    $_SESSION['error'] = 'Tekstbox mag niet leeg zijn. ';
    header("Location: ../forumAlgemeen.php");

}else { 
      if (!empty($_SESSION['accountnaam'])) {
        $accountnaam = $_SESSION['accountnaam'];

        try {
        $SQL = "INSERT INTO Posts (tekst, accountnaam, categorie, unixtijd) VALUES (:tekst,  :accountnaam,  :categorie, :unixtijd)";
        $query = $pdo->prepare($SQL);
        $query->execute([':tekst'=>$tekst, ':accountnaam'=>$accountnaam, ':categorie'=>$categorie, ':unixtijd'=>$unixtijd]);

        $_SESSION['error'] = 'Post succesvol gemaakt!';
         header("location: ../forumAlgemeen.php"); 

       } catch (PDOException $e) {
        echo $e->GetMessage(); 
     
    }
      
     
      }else { 
        $_SESSION['error'] = 'Log eerst in om een post te kunnen plaatsen.';
        header("Location: ../bezoeker-login.php");
      }
    }
 }
}
 $tekst = nl2br(htmlentities($_POST['post']));
 $unixtijd = time();
 $accountnaam = $_SESSION['accountnaam'];
 $categorie = $_POST['categorie'];
postPlaatsen($tekst, $unixtijd, $accountnaam, $categorie);



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
