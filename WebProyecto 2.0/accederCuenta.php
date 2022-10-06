<?php
include_once 'database/database.php';
session_start();

if (isset($_GET['logout'])) {
  session_reset();
  session_unset();
  session_destroy();
  header('location: accederCuenta.php');
  die;
}

if (isset($_SESSION['IdAdministrador'])) {
  header('location: administradorCarta.php');
  die;
}

if (isset($_SESSION['IdCliente'])) {
  header('location: miCuentaReservas.php');
  die;
}

if (
  isset($_POST['email']) &&
  isset($_POST['password'])
) {
  $db = new Database();

  $connection = $db->connection;

  $email = $_POST['email'];
  $password = $_POST['password'];

  $type = 'C';
  $sql = "SELECT * FROM Cliente WHERE CorreoElectronico = ? AND Contraseña = ?";

  $query = $connection->prepare($sql);
  $query->execute([$email, $password]);

  $row = $query->fetch(PDO::FETCH_ASSOC);

  if ($row) {
    $_SESSION = $row;
    $_SESSION['rol'] = $type;
    header('location: miCuentaReservas.php');
    die;
  } else {
    $type = 'A';
    $sql = "SELECT * FROM Administrador WHERE Correo = ? AND Contraseña = ?";
    $query = $connection->prepare($sql);
    $query->execute([$email, $password]);
    $row = $query->fetch(PDO::FETCH_ASSOC);
    if ($row) {
      $_SESSION = $row;
      $_SESSION['rol'] = $type;
      header('location: administradorCarta.php');
      die;
    } else {
      $message = 'Credenciales incorrectas';
    }
  }
}

$db = new Database(); //si el if no se cumple, entonces se vuelve a crear una bd para conectarnos nuevamente.

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
        <a class="navbar-brand" href="index.php">
          <img src="imagenes/logo.PNG" alt="" height="100">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="nosotros.php">NOSOTROS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#reservaEvento">RESERVA DE EVENTOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#pedirAhora">PEDIR AHORA</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="index.php#contacto">CONTACTO</a>
                  </li>
            <a href="accederCuenta.php">
              <button type="button" class="btn btn-primary btn-lg tipoLetraBoton">INICIAR SESIÓN</button>
            </a>

          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!--VENTANA EMERGENTE-->
  <!-- Button trigger modal -->

  <!-- Modal RESERVAR EVENTO-->
  <div class="modal fade" id="reservaEvento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title formatoInformacion" id="reservaEvento">INFORMACIÓN</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="centrarTexto negritaTextoNosotros tamañoLetraTitulo letraEB">
            ¡Inicie sesión!
            <br>
          </p>
          <p class="centrarTexto tamañoLetraCuerpo letraRoboto">
            Para acceder a diferentes descuentos
            se le recomienta registrarse en
            nuestra página.
          </p>
        </div>
        <a class="sinSubrayado" href="accederCuenta.php">
          <div class="d-grid gap-2 col-6 mx-auto">
            <button type="button" class="btn btn-primary letraRoboto negritaLetra botonOvalado" id="acceder">INICIAR SESIÓN</button> <br>
          </div>
        </a>

      </div>
    </div>
  </div>

  <!-- Modal PEDIR AHORA-->
  <div class="modal fade" id="pedirAhora" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title formatoInformacion" id="pedirAhora">INFORMACIÓN</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="centrarTexto negritaTextoNosotros tamañoLetraTitulo letraEB">
            ¡Inicie sesión!
            <br>
          </p>
          <p class="centrarTexto tamañoLetraCuerpo letraRoboto">
            Para acceder a diferentes descuentos
            se le recomienta registrarse en
            nuestra página.
          </p>
        </div>
        <a class="sinSubrayado" href="accederCuenta.php">
          <div class="d-grid gap-2 col-6 mx-auto">
            <button type="button" class="btn btn-primary letraRoboto negritaLetra botonOvalado" id="acceder">INICIAR SESIÓN</button> <br>
          </div>
        </a>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row">

      <h3 class="letraEB negritaLetra centrarTexto estiloLetraCuenta">
        <br>
        ACCEDER A MI CUENTA
      </h3>
    </div>

    <!--Acceder-->
    <form method="POST">
      <div class="row mb-3 negritaLetra">
        <label for="email" class="col-sm-4 col-form-label">Correo Electrónico:</label>
        <br>
        <div class="col-sm-8">
          <input type="email" class="form-control" name="email" id="email">
        </div>
      </div>
      <div class="row mb-3 negritaLetra">
        <label for="password" class="col-sm-4 col-form-label">Contraseña:</label>
        <br>
        <div class="col-sm-8">
          <input type="password" class="form-control" name="password" id="password">
        </div>
      </div>
      <center style="color: red;">
        <?php
        echo isset($message) ? $message : '';
        ?>
      </center>
      <a class="sinSubrayado">
        <div class="d-grid gap-2 col-6 mx-auto">
          <button type="submit" class="btn btn-primary letraRoboto negritaLetra botonOvalado">INICIAR SESIÓN</button>
        </div>
      </a>
    </form>


    <div class="row">

      <h3 class="letraEB centrarTexto negritaLetra tamañoLetraOlvidaste">
        <br>
        ¿Aún no tienes cuenta?
      </h3>
      <div class="container">
        <div class="row">
          <div class="col"></div>
          <div class="col-lg col-md-12 col-sm-12">
            <a class="sinSubrayado" href="registrarCuenta.php">
              <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-primary letraRoboto negritaLetra botonOvalado">REGISTRARME</button>
              </div>
            </a>
          </div>
          <div class="col"></div>
        </div>
      </div>
    </div>


  </div>

  <!--JS-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>


</body>

</html>