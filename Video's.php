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

    <!-- videos -->

<!--
    <section>
        <h3> Zoek naar videos... </h3>
        <p> Niet gevonden wat je wilt? Zoek tussen onze video's! </p>
        <div id="searchbar">
            <input type="text" placeholder="Zoeken...">
        </div>

    </section>
-->
<main id="videoframe">
<?php
include_once 'functies/functies.php';

$datavideos = readMoviesFromDatabase();
    foreach ($datavideos as $records) {
     $html = '   
   
     <section class="section-videos"> 
        <h3>' . $records['titel'] . '</h3>
            <iframe src= "' . $records['link']. '">
            </iframe>

        <p class="samenvatting-videos">' .  $records['samenvatting'] . '</p>

        <div class="tekstvideos"> 
            <p>onderwerp: '.   $records['rubriek']  . ' </p> 
            <p>'.  $records['gepubliceerd'] . '<p> 
        </div>    
     </section> 
     
             ';

            echo $html;
    }

 ?>
</main>

    <?php 
include 'includes\footer.html'
?>

</body>

</html>