
<?php
session_start();
require_once 'functies.php';

function postPlaatsen() {
global $pdo;


$post_id = $pdo -> query('SELECT COUNT(post_id) FROM Posts');
$result = $post_id->fetch();
$newPost_id = $result[0];


$accountnaam = $_SESSION['accountnaam'];
$categorie = 'Algemeen';
$unixtijd = time();


if(isset($_POST['post'])  {
  $titel = $_GET['Titel'];
  $tekst = $_GET['message'];


      if (!empty($_SESSION['accountnaam'])) {


        try {
        $SQL = 'INSERT INTO Accounts(post_id, titel, tekst, accountnaam, categorie, unixtijd) VALUES (:post_id, :titel, :tekst, :accountnaam, :categorie, :unixtijd)';
        $query = $pdo->prepare($SQL);
        $query->execute(array($newPost_id, $titel, $tekst, $accountnaam, $categorie, $unixtijd));

       } catch (PDOException $e) {
        echo $e->GetMessage(); }
      
      }else { 
        $_SESSION['error'] = 'Log eerst in om een post te kunnen plaatsen.';
        header("Location: ../bezoeker-login.php");
      }
    }
}

postPlaatsen();



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
