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
        <h3 id="OptellenAftrekken">Optellen en aftrekken</h3>
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

    
    <section>
        <h3 id="Tafels">Tafels</h3>
        <p> Hieronder kun je een aantal filmpjes vinden om kennis te maken met tafels, en je kunt met deze filmpjes
            ook
            nog eens oefenen!
        </p>
    </section>
    <article>
        <h5> a </h5>
        <iframe src="https://www.youtube.com/embed/Fko4WKyu6NY">
        </iframe>
        <iframe src="https://www.youtube.com/embed/3QiCFhUjPL8">
        </iframe>
        <iframe src="https://www.youtube.com/embed/28xQEUeMZd4">
        </iframe>
    </article>


<?php 
for each ($datavideos as $records)
{
    for each ($datavideos where categorie = breuken) {
        post video 
    }
    <h3 id="Breuken">Breuken</h3>
        <iframe src="https://www.youtube.com/embed/X2Qsl9TVDZ0">
        </iframe>
        <iframe src="https://www.youtube.com/embed/1jt5uJrZvKc">
        </iframe>
        <iframe src="https://www.youtube.com/embed/RGOl1H5V51k">
        </iframe>
        <iframe src="https://www.youtube.com/embed/yNCySCqFzpg">
        </iframe>
    </article>'
}

    <article>
    <h3 id="Breuken">Breuken</h3>
        <iframe src="https://www.youtube.com/embed/X2Qsl9TVDZ0">
        </iframe>
        <iframe src="https://www.youtube.com/embed/1jt5uJrZvKc">
        </iframe>
        <iframe src="https://www.youtube.com/embed/RGOl1H5V51k">
        </iframe>
        <iframe src="https://www.youtube.com/embed/yNCySCqFzpg">
        </iframe>
    </article>

    <?php 
include 'includes\footer.html'
?>

</body>

</html>