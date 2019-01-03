
<?php 


$config = ['websitenaam'=>'LeerRekenen', 'taal'=>'nl'];

function genereeerHead () { 
global $config;

$html = <<<HEADER
<!DOCTYPE html> 
<html lang="$config[taal]">
<head> 
  <meta charset="UTF-8">
  <title> $config[websitenaam] </title>
</head>
HEADER;

return $html;

}

?>