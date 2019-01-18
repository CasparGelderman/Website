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

    <section>

        <form action="/action_page.php">
            Titel:<br>
            <input type="text" value="Titel" name="Titel"><br>
            Schrijf hier iets!<br>
            <textarea name="message" rows="10" cols="30">Ik heb moeite met..</textarea><br><br>
            <input type="submit" value="Post!" name="post">
        </form>

    </section>

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


<?php
include_once 'functies/functies.php';
global $pdo;
$dataposts = readPostsFromDatabase();
foreach ($dataposts as $forumpost) {
    $html = '   
     <section class="section-forumAlgemeen"> 
        <h3>' . $forumpost['titel'] . '</h3>
        <p class="samenvatting-forumAlgemeen">' .  $forumpost['tekst'] . '</p>

     </section> 
             ';

    echo $html;
}

?>

<?php
include 'includes\footer.html'
?>
</body>
