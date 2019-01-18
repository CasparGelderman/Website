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

 
<section class="ReactiePlaatsen">
<h3> Plaats een comment... </h3>
<p> <?php
    if (!empty( $_SESSION['error'])) {
    echo  $_SESSION['error'];
    } ?> </p>
      <form method="post" action="functies/functies-forum.php">
        <textarea name="post" id="post" value="post"> Tekst </textarea>
<select name="categorie">
<option value="Algemeen" >Algemeen</option>
<option value="Bewerkingen">Bewerkingen</option>
<option value="Tafels">Tafels</option>
<option value="Breuken">Breuken</option>
<option value="Percentages">Percentages</option>

  </select>

        <input type="submit" name="Posten">
      </form>
 </section>


<?php
include_once 'functies/functies-forum.php';
$dataposts = readPostsFromDatabaseBreuken();
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
