<?php
include "verif.php";
include "header.php";

    if (isset($_SESSION['Connect']) && ($_SESSION['Connect'] == TRUE)){
        include 'Usermanager.php';
          include 'conf.php';
          $db = new PDO($dsn, $user, $pwd);
          $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
          $afficher = new Usermanager($db);
          $afficher->afficher();
    }else{
        error_reporting(0);
        print("vous n'etes pas connecter !");
        session_destroy();
    }
