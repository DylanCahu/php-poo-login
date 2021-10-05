<?php
session_start();
if (!isset($_SESSION['Connect'])) {

    echo "<h2>connectez vous pour acceder à ce contenu !</h2>";
    echo "
  <form action='index.php'>
    <input type=submit value='se connecter' >
  </form>";

    exit;

}
