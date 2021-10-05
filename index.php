<?php

include "header.php";

$db = new PDO($dsn, $user, $pwd);

if ($_POST) {
  $usersManager = new UserManager($db);
  $usersManager->connect($_POST['email'], $_POST['password']);
}
// $db = new PDO($dsn, $user, $pwd);
// $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

// if ($_POST) {
//     if ($_POST['email'] and $_POST['password']) {
//       $email = $_POST['email'];
//       $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
//       header('Location: afficher.php');
      
//       $sth = $db->exec("select email, password from users  where email='" . $email . "' and password='" . $password . "'); ");
//         // print("insert into users ('email', 'password') values ('" .$email. "','" .$password."'); ");
//         print("select email, password from users  where email='" . $email . "' and password='" . $password . "'); ");

//     }
// }

?>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/signin.css">
<main class="form-signin">
  <form method="POST" action="?">
    <img class="mb-4" src="img/ndlp.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" name="signin" type="submit">Se connecter</button>
  </form>
<br/>
<form action="inscription.php">
<button class="w-100 btn btn-lg btn-primary" name="signin" type="submit">S'inscrire</button>
</form>
<p class="mt-5 mb-3 text-muted">&copy; 2021</p>
</main>
