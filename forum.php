<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Leer rekenen</title>
    <link rel="icon" type="image/ico" href="afbeeldingen/logo.png" />
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>
<?php 
include 'pagina-elementen\header.html';
    ?>
<?php 
include 'pagina-elementen\mainnavigatie.html';
?>

    <!-- Forum -->
    <main id="forumalgemeen">

        <h2> Forum </h2>

        <h3> Onderwerpen </h3>
        <ul>


            <!-- titel subforum -->
            <li><a href="forum-rekenen.html">Rekenen</a>
                <!-- laatste posts -->
                <ul>
                    <li>
                        <h4> Laatste posts... </h4>
                    </li>
                    <!-- post -->
                    <li>
                        <div class="post">
                            <p>Topic 1</p>
                            <p> Created by [account] on 2018-02-03</p>
                        </div>
                    </li>
                    <!-- einde post -->
                    <li>
                        <div class="post">
                            <p>Topic 2</p>
                            <p> Created by [account] on 2018-02-03</p>
                        </div>
                    </li>
                    <li>
                        <div class="post">
                            <p>Topic 3</p>
                            <p> Created by [account] on 2018-02-03</p>
                        </div>

                    </li>
                </ul>
                <br>
            </li>
            <!-- eindigt het segment laatste posts -->


            <!-- forum algemeen segment -->
            <li><a href="forum-algemeen.html">Algemeen</a>
                <ul>
                    <li>
                        <h4> Laatste posts... </h4>
                    </li>

                    <li>
                        <div class="post">
                            <p>Topic 1</p>
                            <p> Created by [account] on 2018-02-03</p>
                        </div>
                    </li>
                    <li>
                        <div class="post">
                            <p>Topic 2</p>
                            <p> Created by [account] on 2018-02-03</p>
                        </div>
                    </li>
                    <li>
                        <div class="post">
                            <p>Topic 3</p>
                            <p> Created by [account] on 2018-02-03</p>
                        </div>
                    </li>

                </ul>
                <br>
            </li>


            <!-- forum vragen segment -->
            <li><a href="forum-vragen.html">Vragen</a>
                <ul>
                    <li>
                        <h4> Laatste posts... </h4>
                    </li>
                    <li>
                        <div class="post">
                            <p>Topic 3</p>
                            <p> Created by [account] on 2018-02-03</p>
                        </div>
                    </li>
                    <li>
                        <div class="post">
                            <p>Topic 3</p>
                            <p> Created by [account] on 2018-02-03</p>
                        </div>
                    </li>
                    <li>
                        <div class="post">
                            <p>Topic 3</p>
                            <p> Created by [account] on 2018-02-03</p>
                        </div>
                    </li>

                </ul>
            </li>
        </ul>

    </main>


    <?php 
include 'pagina-elementen\footer.html'
?>

</body>

</html>