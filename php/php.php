
<?php 


$config = ['websitenaam'=>'LeerRekenen', 'taal'=>'nl'];

function genereerHead() { 
global $config;

$html = <<<HEADER
<!DOCTYPE html> 
<html lang="$config[taal]">
<head> 
  <meta charset="UTF-8">
  <title> $config[websitenaam] </title>
  <link rel="icon" type="image/ico" href="afbeeldingen/logo.png" />
  <link rel="stylesheet" href="stylesheet.css">
</head>
HEADER;

return $html;
}
?>