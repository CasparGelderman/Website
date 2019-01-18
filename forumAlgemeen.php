<?php
session_start();
include 'includes\head.html';
?>

<body>
<?php
include 'includes\header.html';
?>
<?php
include 'includes\mainnavigatie.html';
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
include_once 'functies/functies.php';
sqlsrv_connect ( LeerRekenenDatabase);

if(isset($_POST['post']){
    //insert script voor het tabel 'posts'

);
}

?>

<?php
include_once 'functies/functies.php';

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
