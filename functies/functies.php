<?php 

DatabaseConnectie();







function readThumbsFromDatabase() {
  global $pdo;
  try {
      $stmt = $pdo->prepare("SELECT * FROM Videos");
      $stmt->execute();
$datavideos = $query-> fetchAll(PDO::FETCH_ASSOC);
      return $datavideos;
  } catch (PDOException $e) {
      echo "Could not fetch movies, ".$e->getMessage();
  }
}





function DatabaseConnectie () { 
  global $pdo;
  $hostname = "localhost"; //Naam van de Server
  $dbname = "LeerRekenendatabase";    //Naam van de Database
  $username = "sa";      //Inlognaam
  $pw = "01Glitterlove@";      //Password
  global $pdo;
  
      try { 
        $pdo = new PDO ("sqlsrv:Server=$hostname;Database=$dbname;ConnectionPooling=0", "$username", "$pw");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        
      } catch (PDOException $e) {
  echo $e->GetMessage();
      }
  