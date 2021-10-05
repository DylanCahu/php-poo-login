<?php
include_once "../header.php";

try {
    $db = new PDO($dsn, $user, $pwd);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    
    $usersManager = new UsersManager($db);
    $users = $usersManager->getList();

    print('</br>Liste des users : ');
    foreach ($users as $user){
        // print('</br>' . $user->getNom());
        print('<h3>' . $user->get_email() .','  . $users->get_role() . ' : </a></h3>');

    }
/*

    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    if ($db){
        print('Lecture de la base de donnée :');
        $request = $db->query('SELECT id, nom, `force`, degats, niveau, experience FROM perso;');
        while ($ligne = $request->fetch(PDO::FETCH_ASSOC)) {
            $perso = new user($ligne);
            print('<h3>' . $perso->getNom() . '</h3> ça force est de : ' . $perso->getForce() . '<br> ses dégats sont : ' . $perso->getDegats() . '<br> son XP est :' . $perso->getExperience() . '<br> Il est niveau : ' . $perso->getNiveau());
        }
    }
*/

} catch (PDOException $e){
    print($e->getMessage());
}
