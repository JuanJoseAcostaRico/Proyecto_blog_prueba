<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/x-icon" href="/assets/logo-vt.svg" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login /Software Libre Blog</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
</head>

<body class="bg-info d-flex justify-content-center align-items-center vh-100">

  <div class="bg-white p-5 rounded-5 text-secondary shadow" style="width: 30rem; height: 37rem;">
    <div class="d-flex justify-content-center">
      <img src="assets/login-icon.svg" alt="login-icon" style="height: 7rem" />
    </div>
    <form action="sesion.php" method="POST" autocomplete="off">
      <div class="text-center fs-1 fw-bold">Registrarse</div>
      <div class="input-group mt-4">
        <div class="input-group-text bg-info">
          <img src="assets/username-icon.svg" alt="username-icon" style="height: 1rem" />
        </div>
        <label for="exampleInputPassword1" class="form-label blanco"></label>
        <input type="text" class="form-control bg-light " name="name" required placeholder="Nombre de usuario">
      </div>
      <div class="input-group mt-1">
        <div class="input-group-text bg-info">
          <img src="assets/password-icon.svg" alt="password-icon" style="height: 1rem" />
        </div>
        <label for="exampleInputPassword1" class="form-label blanco"></label>
        <input type="password" class="form-control bg-light " name="password" required placeholder="Contraseña">
      </div>
      <div class="input-group mt-1">
        <div class="input-group-text bg-info">
          <img src="assets/password-icon.svg" alt="password-icon" style="height: 1rem" />
        </div>
        <label for="exampleInputPassword1" class="form-label blanco"></label>
        <input type="password" class="form-control bg-light " name="confirm-password" required placeholder="Confirmar Contraseña">
      </div>
      <button type="submit" class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm" value="entrar" name="entrar">
        Registrarse
      </button>
      <div class="p-3">
        <div class="border-bottom text-center" style="height: 0.9rem">
          <a href="../index.html" class="btn btn-info">Ir a Inicio</a> <br> <br>
          <a href="login.php" class="btn btn-primary">Ir al login</a>
        </div>
      </div>
  </div>

  </form>
</body>

</html>