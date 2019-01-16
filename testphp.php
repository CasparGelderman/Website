<?php

function DataBaseConnectie () { 
  
    try { 
  $handler = new PDO('mysql:host=localhost;dbname=LeerRekenenDatabase', 'root', '');
  $handler -> setAttribute(PDO::ATTR_ERRMORE, PDO::ERRMODE_EXCEPTION); 
    } catch (PDOException $e) {
echo $e->GetMessage();
    }
  }

DataBaseConnectie();