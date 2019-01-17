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

    <!-- videos -->

    <section>
        <h3> Zoek naar videos... </h3>
        <p> Niet gevonden wat je wilt? Zoek tussen onze video's! </p>
        <div id="searchbar">
            <input type="text" placeholder="Zoeken...">
        </div>

        </section>
<?php
include_once 'functies/functies.php';

$datavideos = readMoviesFromDatabase();
    foreach ($datavideos as $records) {
     $html = '   
   
     <article class="sectionvideos2">  

     <section class="section-videos"> 
        <h3>' . $records['titel'] . '</h3>
            <iframe src= "' . $records['link']. '">
            </iframe>
            <br>
            <p class="samenvatting-videos">' .  $records['samenvatting'] . '</p>

            <div class="tekstvideos"> 
            <p>onderwerp: '.   $records['rubriek']  . ' </p> 
            <p>'.  $records['gepubliceerd'] . '<p> 
            </div> 

            </section> <br>
            </article>
             ';

            echo $html;
    }

 ?>
     

    <?php 
include 'includes\footer.html'
?>

</body>

</html>