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
include 'includes\footer.html'
?>

</body>

</html>