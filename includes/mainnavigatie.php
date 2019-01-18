
  <nav id="mainnav">
    <ul>
      <li>
        <a href="index.php">Home</a>
      </li>
      <li>
        <a href="Video's.php">Video's</a>
        <ul class="submenu">
          <li>
            <a href="Video's.php#OptellenAftrekken">Optellen en aftrekken</a>
          </li>
          <li>
            <a href="Video's.php#Tafels">Tafels</a>
          </li>
          <li>
            <a href="Video's.php#Breuken">Breuken</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="">Forum</a>
        <ul class="submenu">
          <li>
            <a href="forumAlgemeen.php">algemeen</a>
          </li>
          <li>
            <a href="forumBewerkingen.php">bewerkingen</a>
          </li>
          <li>
            <a href="forumTafels.php">tafels</a>
          </li>
          <li>
            <a href="forumBreuken.php">breuken</a>
          </li>
          <li>
            <a href="forumProcenten.php">procenten</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="over-ons.php">Over ons</a>
      </li>
      <li>
        <a href="bezoeker-login.php">Bezoeker</a>
        
       
<?php 
if (empty($_SESSION['accountnaam'])) {
  $html = '
  <ul class="submenu">
  <li>
  <a href="bezoeker-login.php">Log in</a>
</li>
<li>
  <a href="bezoeker-register.php">Registreren</a>
</li>
</ul>' ;
} else { 
 $html = '
 <ul class="submenu">
  <li>
  <a href="bezoeker-logout.php">Log uit</a>
</li>
</ul>' ;
}
echo $html;
?> 
      </li>
    </ul>
  </nav>