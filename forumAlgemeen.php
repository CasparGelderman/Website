<?php
session_start();
include 'includes\head.html';
?>

<body>
<?php
include 'includes\header.html';
?>
<?php 
require_once 'includes\mainnavigatie.php';
?>

  

<?php
include_once 'functies/functies-forum.php';



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

    $post_id = $dbo->query('SELECT COUNT(post_id) FROM Posts');
    $newPost_id = $post_id+1;
}
 ?>




<?php
include 'includes\footer.html'
?>
</body>
