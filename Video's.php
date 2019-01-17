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
        <!-- <h3 id="OptellenAftrekken">Optellen en aftrekken</h3>
        <p> Rekenen begint altijd met het leren om op te tellen en af te trekken, en daarom hebben wij hieronder een
            aantal filmpjes voor jou om dit te leren!
        </p>
    </section>
    <article>
        <h5> a </h5>
        <iframe src="https://www.youtube.com/embed/xEvMr4i5c4E">
        </iframe>
        <iframe src="https://www.youtube.com/embed/PZlUk3pvFd8">
        </iframe>
        <iframe src="https://www.youtube.com/embed/qh8fRZc4EBw">
        </iframe>
    </article>

<?php
include_once 'functies/functies.php';

$datavideos = readMoviesFromDatabase();
    foreach ($datavideos as $records) {
     $html = '   <section class="section-videos"> 
        <h3 class="section-videos-h3">' . $records['titel'] . '</h3>
            <iframe src=' . $records['link']. '>
            </iframe>
            <p>'.  $records['poster'] . '</p> 
            <p>' .   $records['rubriek']  . ' </p> 
            <p>' .  $records['gepubliceerd'] . '<p> 
            <br> 
            <p class="samenvatting">' .  $records['samenvatting'] . '</p>
            </section> ';

            echo $html;
    }

 ?>
     

    <?php 
include 'includes\footer.html'
?>

</body>

</html>