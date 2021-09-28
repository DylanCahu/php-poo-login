<!-- <link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/signin.css"> -->
<main class="form-signin">
  <form method="POST" action="?">
    <img class="mb-4" src="../img/ndlp.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Création d'utilisateur :</h1>
<br>
    <div class="form-floating">
      <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
<br>
    <div class="form-floating">
      <input name="password1" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
<br>
    <div class="form-floating">
      <input name="password2" type="password" class="form-control" id="floatingPassword" placeholder="Confirm password">
      <label for="floatingPassword">Confirm password</label>
    </div>
<br>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="user"> User 
        <br>
        <input type="checkbox" value="superuser"> Super user
      </label>
    </div>
    <br>
    <button class="w-100 btn btn-lg btn-primary" name="signin" type="submit">Créer</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
  </form>