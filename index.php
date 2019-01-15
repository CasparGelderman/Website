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

    <main>
        <h2>Leerrekenen.nl</h2>
        <p> Leerrekenen.nl is dé website om de basis van rekenen onder de knie te krijgen,
            met deze website krijg je een voorsprong op stof die je op de basisschool krijgt,
            of geeft je extra oefening naast school! Kijk video's van leuke juffen een meesters
            die je graag alles willen vertellen over rekenen, of praat met anderen op ons forum!
            Daar kun je vragen stellen of vragen voor anderen antwoorden! </p>
        <br>

        <h2> Laatste forum posts </h2> <br>
        <p> Hieronder vind je de laatste drie forum posts! </p> <br>


        <article id="indexforum">
            <h5> a </h5>
            <div class="forumpost">
                <div class="forumposthead">
                    <h3>Gepost door l33tpro</h3>
                    <h3> Gepost op 2018-03-13</h3>
                </div>
                <p>ik vint dit een heele fijne site want ik kan hier goet op oefenen mwr mama</p>
            </div>
            <div class="forumpost">
                <div class="forumposthead">
                    <h3>Gepost door pijnn</h3>
                    <h3> Gepost op 2018-03-12</h3>
                </div>
                <p> ik snap breuken delen niet </p>
            </div>

            <div class="forumpost">
                <div class="forumposthead">
                    <h3>Gepost door Diana</h3>
                    <h3> Gepost op 2018-03-12</h3>
                </div>
                <p>Dankuwel voor het maken van deze site. Samen met mijn dochter kan ik zo op een goede manier
                    rekenen
                    oefenen. Het is fijn dat alles bij elkaar staat op één site. </p>
            </div>

        </article>

        <h2>Laatste Video's</h2>
        <p>Hieronder vind je de nieuwste video's om altijd bij de les te blijven!</p>

        <article>
            <h5> a </h5>
            <iframe src="https://www.youtube.com/embed/xEvMr4i5c4E">
            </iframe>
            <iframe src="https://www.youtube.com/embed/3QiCFhUjPL8">
            </iframe>
            <iframe src="https://www.youtube.com/embed/X2Qsl9TVDZ0">
            </iframe>
        </article>
    </main>

    <?php 
include 'includes\footer.html'
?>

</body>

</html>