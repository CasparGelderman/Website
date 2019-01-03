<?php 
require_once 'php.php';
echo genereerHead();
?>

<body>
<?php 
include 'pagina-elementen\header.html';
    ?>
<?php 
include 'pagina-elementen\mainnavigatie.html';
?>

  <!-- forum rekenen -->
  <main class="forumcategorie">

    <!-- Search bar + terug knop -->
    <div class="searchbar">
      <p> &#8592; <a href="forum.html">terug</a> </p>
      <input type="text" placeholder="Zoeken...">
    </div>
    <!-- Einde search bar + terug knop -->

    <div class="forum-thread-overzicht">
      <h2> Rekenen </h2>

      <ul>
        <!-- de threads zitten in een unordered list -->

        <!-- Dit is een thread -->
        <li>
          <a href="post1.html"> Lalala </a>
          <div class="forum-thread-overzicht-informatie">
            <p> Posted by [account] on [date]</p>
            <p> Posts: 2 </p>
          </div>
        </li>
        <!-- einde thread. -->

        <!-- dit is een thread. -->
        <li>
          <a href="post1.html"> Boolala </a>
          <div class="forum-thread-overzicht-informatie">
            <p> Posted by [account] on [date]</p>
            <p> Posts: 4 </p>
          </div>
        </li>
        <!-- einde thread -->

        <li>
          <a href="post1.html"> Boolala </a>
          <div class="forum-thread-overzicht-informatie">
            <p> Posted by [account] on [date]</p>
            <p> Posts: 4 </p>
          </div>
        </li>

        <li>
          <a href="post1.html"> Boolala </a>
          <div class="forum-thread-overzicht-informatie">
            <p> Posted by [account] on [date]</p>
            <p> Posts: 4 </p>
          </div>
        </li>
      </ul>
    </div>

  </main>


  <?php 
include 'pagina-elementen\footer.html'
?>

</body>

</html>