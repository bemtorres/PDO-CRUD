
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/signin.css" rel="stylesheet">
    <style>
    .ocultar {
        display: none;
    }
</style>
  </head>

  <body class="text-center">
    <form class="form-signin" method="POST" action="Controlador/cLogin.php">
      <h1 class="h3 mb-3 font-weight-normal">Login Ventas</h1>
      <label for="inputUsuario" class="sr-only">Username</label>
      <input type="Usuario" id="inputUsuario" name="txtUsuario" class="form-control" placeholder="Username" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="txtPass" class="form-control" placeholder="Password" required>
      <button class="btn btn-lg btn-success btn-block" type="submit">Ingresar</button>
    </form>

  </body>
</html>