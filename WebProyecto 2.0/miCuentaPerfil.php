<?php
session_start();

if (!isset($_SESSION['IdCliente'])) {
  session_reset();
  session_unset();
  session_destroy();
  header('location: accederCuenta.php');
  die;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recreo Ponceca</title>
  <!--Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <!--FUENTE DE LETRA - EB Garamond-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=Roboto:wght@100;900&family=Tangerine&display=swap" rel="stylesheet">

  <!--codigo para que la página cargue rápido-->
  <link rel="preload" href="interfaz.css" as="style">
  <link href="interfaz.css" rel="stylesheet">

  <!--Icono-->
  <link rel="shortcut icon" type="image/x-icon" href="images/LogoPaginaWeb.JPG">
</head>

<body>
  <!--BARRA DE NAVEGACIÓN-->
  <div>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="indexConSesion.php">
          <img src="imagenes/logo.PNG" alt="" height="100">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="nosotrosConSesion.php">NOSOTROS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="reservarEventos.php">RESERVA DE EVENTOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="delivery-Platos.php">PEDIR AHORA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="indexConSesion.php#contacto">CONTACTO</a>
            </li>
            <a href="miCuentaReservas.php">
              <button type="button" class="btn btn-primary btn-lg tipoLetraBoton">MI CUENTA</button>
            </a>

          </ul>
        </div>
      </div>
    </nav>
  </div>

  <main>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-lg col-md-3 col-sm-12">
                    <a class=" sinSubrayado" href="miCuentaReservas.php">
          <div class="d-grid gap-2 col-6 mx-auto ">
            <button type="button" class="btn btn-primary tituloReservarEvento tamañoBotonReservar colorBotonSecundario letraRoboto negritaLetra">MIS RESERVAS</button> <br>
          </div>
          </a>
        </div>
        <div class="col-lg col-md-3 col-sm-12">
          <a class="sinSubrayado" href="#">
            <div class="d-grid gap-2 col-6 mx-auto ">
              <button type="button" class="btn btn-primary tituloReservarEvento tamañoBotonReservar colorBoton  letraRoboto negritaLetra">MI PERFIL</button> <br>
            </div>
          </a>
        </div>
        <div class="col-lg col-md-3 col-sm-12">

          <a class="sinSubrayado" href="accederCuenta.php?logout=true">
            <div class="d-grid gap-2 col-6 mx-auto ">
              <button type="button" class="btn btn-primary tituloReservarEvento tamañoBotonReservar colorBotonSecundario  letraRoboto negritaLetra">CERRAR SESIÓN</button> <br>
            </div>
          </a>
        </div>
      </div>
    </div>

    <br>
    <div class="container">
      <div class="col">

        <h5 class="card-title centrarTexto negritaTextoNosotros letraEB negritaLetra centrarTexto estiloLetraCuenta">MI PERFIL</h5>

        <div class="row">
          <div class="col">
            <label for="formGroupExampleInput" class="form-label negritaLetra">Nombres:</label>
            <p class="form-control">
              <?php echo $_SESSION['Nombre']; ?>
            </p>
          </div>
          <div class="col">
            <label for="formGroupExampleInput" class="form-label negritaLetra">Apellidos:</label>
            <p class="form-control">
              <?php echo $_SESSION['Apellido']; ?>
            </p>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <label for="formGroupExampleInput" class="form-label negritaLetra">Género:</label>
            <p class="form-control">
              <?php echo $_SESSION['Genero']; ?>
            </p>
          </div>
          <div class="col">
            <label for="formGroupExampleInput" class="form-label negritaLetra">Teléfono:</label>
            <p class="form-control">
            <?php echo $_SESSION['Telefono']; ?>
            </p>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <label for="formGroupExampleInput" class="form-label negritaLetra">Fecha de Nacimiento:</label>
            <p class="form-control">
            <?php echo substr($_SESSION['FechaNacimiento'], 0, 10); ?>
            </p>
          </div>
        </div>

        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label negritaLetra">Correo Electrónico:</label>
          <p class="form-control">
          <?php echo $_SESSION['CorreoElectronico']; ?>
          </p>
        </div>
      </div>
    </div>
    <br>
  </main>

  <!--JS-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</body>

</html>