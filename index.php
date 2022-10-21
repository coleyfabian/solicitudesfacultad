<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bt/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Login</title>
</head>
<body>
  <div class="container w-75 bg-light mt-5 rounded shadown">
    <div class="row aling-items-stretch">
      <div class="col imgLogoDos d-none d-lg-block rounded col-md-5 col-lg-5 col-xl-6"></div>
      <div class="col bg-white rounded p-5">
        <h2 class="fw-bold text-center py-5">Bienvenido</h2>
        <!-- Login -->
        <form action="#">
          <div class="mb-4">
            <label for="user" class="form-label">Usuario</label>
            <input type="text" placeholder="Numero de identidad" class="form-control" name="usuario">
          </div>
          <div class="mb-4">
          <label for="user" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="password">
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-success">Entrar</button>
          </div>
          <div class="my-3 fw-bold">
            <span>¿Deseas realizar una solicitud? </span>
            <div class="d-grid">
            <button type="submit" class="btn btn-danger">Registrate</button>
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="js/bootstrap.bundle.js"></script>
</body>
</html>