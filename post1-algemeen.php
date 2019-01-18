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

  <!-- forum thread. -->
  <main class="forumthread">

    <!-- search bar -->
    <div class="searchbar">
      <p> &#8592; <a href="forum.html">terug</a> </p>
      <input type="text" placeholder="Zoeken...">
    </div>

    <!-- main forum post - thread maker post -->
    <section class="main-post-and-posts">

      <section class="main-forumpost">
        <h2>Dit is een forum thread name </h2>
        <p> Dit is de forum post. Lorem ipsum, lalalalaalalalalalala
          lalalalalalalalalalalallalalaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
        </p>
        <p> Gepost door [account] op [datum] </p>
      </section>

      <h3> Reacties </h3>

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
    </section>

    <section class="ReactiePlaatsen">
      <h3> Plaats een comment... </h3>
      <form method="post">
        <textarea name="opmerking"></textarea>
        <input type="submit" name="Posten" value="Posten">
      </form>
    </section>

  </main>

 
  <?php 
include 'includes\footer.html'
?>

</body>

</html>