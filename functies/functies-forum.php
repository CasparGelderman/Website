
<?php
include 'functies.php';


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
