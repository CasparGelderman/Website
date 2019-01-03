
<?php 


function footer() {
  $footer = <<<FOOTER 
  <footer>
  <p> &copy; Caspar Gelderman en Sara Li Wijnia (2018)</p>
</footer>
FOOTER;

return $footer;
}


function navigation () { 
  $mainnavhtml = <<<MAINNAVI
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
        <a href="forum.php">Forum</a>
      </li>
      <li>
        <a href="over-ons.php">Over ons</a>
      </li>
      <li>
        <a href="bezoeker-login.php">Bezoeker</a>
        <ul class="submenu">
          <li>
            <a href="bezoeker-login.php">Log in</a>
          </li>
          <li>
            <a href="bezoeker-register.php">Registreren</a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  MAINNAVI;
  return $mainnavhtml;
}
  
}

