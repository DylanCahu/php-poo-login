<?php
function chargerClass($class)
{
    include $class . ".php";
}
spl_autoload_register('chargerClass');

include "conf.php" ;

echo "
  <form action='deco.php'>
    <input type=submit value='se déconnecter' >
  </form>";