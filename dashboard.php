<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bt/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Dashboard</title>
</head>
<body>

    <?php
        session_start();
        if (!isset($_SESSION["usuario"])) {
            header("location:index.php");
        }
    ?>

    <nav class="navbar navbar-expand-lg bg-succes navbarc">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <!-- <span class="colorTitle2">PQRS - Administración</span> -->
            <img src="img/logo3.png" class="alturalogo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 colorTitle">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><span class="colorTitle">PQRS</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><span class="colorTitle">Respuestas - PQRS</span></a>
            </li>
        </ul>
        <div class="d-flex">
            <a class=" btn bg-danger" href="cerrar_sesion.php"> 
                <span class="colorTitle">Salir</span>
            </a>
        </div>
        </div>
    </div>
    </nav>

    <form action="" method="">
        <div class="container margin">
            <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Asunto</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="mb-3">
            <label for="user" class="form-label">Tipo de administración</label>
                <select class="form-select">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="3">Cuatro</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-success">Enviar PQRS</button>
            </div>
        </div>
    </form>
    
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>