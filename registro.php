<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bt/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Registro</title>
</head>
<body>
  <div class="container w-75 bg-light mt-5 rounded shadown">
    <div class="row aling-items-stretch">
      <div class="col imgLogoDos d-none d-lg-block rounded col-md-5 col-lg-5 col-xl-6"></div>
      <div class="col bg-white rounded p-5">
        <h2 class="fw-bold text-center py-5">Registro</h2>
        <!-- Login -->
        <form action="#">
          <div class="mb-4">
            <label for="user" class="form-label">Nombre</label>
            <input type="text" placeholder="Numero de identidad" class="form-control" name="usuario">
          </div>
          <div class="mb-4">
                <label for="user" class="form-label">Apellido</label>
                <input type="text" placeholder="Numero de identidad" class="form-control" name="usuario">
          </div>
          <div class="mb-4">
                <label for="user" class="form-label">Cedula</label>
                <input type="text" placeholder="Numero de identidad" class="form-control" name="usuario">
          </div>
          <div class="mb-4">
                <label for="user" class="form-label">Facultad</label>
                <select class="form-select">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="3">Cuatro</option>
                </select>
            </div>
          <div class="d-grid">
                <button type="submit" class="btn btn-success">Entrar</button>
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="js/bootstrap.bundle.js"></script>
</body>
</html>