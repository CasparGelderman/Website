<?php
session_start();
require_once 'functies/functies.php';
include 'includes\head.html';
?>

<body>
<?php
include 'includes\header.html';
?>
<?php

?>

  

<?php
global $pdo;
$post_id = $pdo -> query('SELECT COUNT(post_id) FROM Posts');
$result = $post_id->fetch();
$newPost_id = $result[0];


$accountnaam = $_SESSION['accountnaam'];
$categorie = 'Algemeen';
$unixtijd = time();

if(isset($_POST['post'])) {
    $titel = $_GET['Titel'];
    $tekst = $_GET['message'];

    try {
        $SQL = 'INSERT INTO Accounts(post_id, titel, tekst, accountnaam, categorie, unixtijd) VALUES (:post_id, :titel, :tekst, :accountnaam, :categorie, :unixtijd)';
        $query = $pdo->prepare($SQL);
        $query->execute(array($newPost_id, $titel, $tekst, $accountnaam, $categorie, $unixtijd));

    } catch (PDOException $e) {
        echo $e->GetMessage();
    }
}
?>


$dataposts = readPostsFromDatabaseAlgemeen();
foreach ($dataposts as $forumpost) {
    $html = '   
    <div class="forumpost">
    <div class="forumposthead">
      <h3>Gepost door ' . $forumpost['accountnaam'] . ' </h3>
      <h3> Gepost op ' . $forumpost['unixtijd']. '</h3>
    </div>
    <p>' . $forumpost['tekst'] . '</p>
  </div>
             ';
    echo $html;
}
 ?>




<?php
include 'includes\footer.html'
?>
</body>
