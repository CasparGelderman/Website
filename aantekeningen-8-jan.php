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
?>



</body>
</html>