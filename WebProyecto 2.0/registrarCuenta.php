<?php

include_once 'database/database.php';
session_start();

if (isset($_SESSION['IdCliente'])) {
  header('location: miCuentaReservas.php');
  die;
}

if ( //verificar que rellenó todos los espacios
  isset($_POST['names']) &&
  isset($_POST['surnames']) &&
  isset($_POST['gender']) &&
  isset($_POST['phone']) &&
  isset($_POST['birthdate']) &&
  isset($_POST['email']) &&
  isset($_POST['password']) &&
  isset($_POST['password_confirm'])
) {
  if ($_POST['password'] == $_POST['password_confirm']) {  //el password que se manda a bd es del password_confirm

    $db = new Database();
    $connection = $db -> connection;

    $query = $connection -> prepare('SELECT CorreoElectronico 
    FROM Cliente
    WHERE CorreoElectronico = ?');   //1° quiero este tipo de datos (plantilla de consulta)

    $query -> execute([
      $_POST['email']
    ]);  //2°, se toma email para verificar que no se dupliquen los email que se crean

    $row = $query -> fetch(PDO::FETCH_ASSOC);   //se guarda la variable

    if ($row) {   //si el email existe.... no se permite crear
      $message = '<span style="color: red;">Ya existe un usuario con el correo ' . $_POST['email'] . '</span>';
    } else {  //sino se le crea
      $query = $connection -> prepare('INSERT INTO Cliente
        (
          Nombre, Apellido, Genero, Telefono, FechaNacimiento,
          CorreoElectronico, Contraseña, Dirección
        )
      VALUES
        (
          ?, ?, ?, ?, ?, ?, ?, ?
        )
      ');

      $query -> execute([  //se guarda lo escrito en las casillas en el sql
        $_POST['names'],
        $_POST['surnames'],
        $_POST['gender'],
        $_POST['phone'],
        $_POST['birthdate'],
        $_POST['email'],
        $_POST['password'],
        ''
      ]);

      $rowCount = $query -> rowCount();  //sirve para saber cuantas filas fueron afectadas

      if ($rowCount) { //si se creó una nueva fila, entonces significa que se registró correctamente
        $_SESSION = [
          'Nombre' => $_POST['names'],
          'Apellido' => $_POST['surnames'],
          'Genero' => $_POST['gender'],
          'Telefono' => $_POST['phone'],
          'FechaNacimiento' => $_POST['birthdate'],
          'CorreoElectronico' => $_POST['email'],
          'Contraseña' => $_POST['password'],
          'Dirección' => ''
        ];
        echo '<script>
          alert("Usuario registrado correctamente");
          location.href = "./miCuentaReservas.php";
        </script>';
      } else {
        $message = '<span style="color: red;">No se pudo registrar al usuario</span>';
      }
    }

  } else {
    $message = '<span style="color: red;">Las contraseñas deben ser iguales</span>';
  }
} else {
  $message = 'Rellene todos los campos';
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


  <main>
    <br>
    <div class="container">
      <form class="col" method="POST">

        <?php
        //verificar que esté rellenos
        $names = isset($_POST['names']) ? $_POST['names'] : '';
        $surnames = isset($_POST['surnames']) ? $_POST['surnames'] : '';
        $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
        $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
        $birthdate = isset($_POST['birthdate']) ? $_POST['birthdate'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        $password_confirm = isset($_POST['password_confirm']) ? $_POST['password_confirm'] : '';

        ?>

        <h5 class="card-title  negritaTextoNosotros letraEB  centrarTexto estiloLetraCuenta tamañoLetraRegistrar">REGISTRARME</h5>

        <div class="row">
          <div class="col">
            <label for="names" class="form-label negritaLetra">Nombres:</label>
            <input name="names" type="text" class="form-control" placeholder="Ejemplo: Anthony" value="<?php echo $names; ?>" required>
          </div>
          <div class="col">
            <label for="surnames" class="form-label negritaLetra">Apellidos:</label>
            <input name="surnames" type="text" class="form-control" placeholder="Ejemplo: Crespo Palomino" value="<?php echo $surnames; ?>" required>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <label for="gender" class="form-label negritaLetra">Género:</label>
            <select name="gender" class="form-control" required>
              <option value="M" <?php echo $gender == 'M'? 'selected': '';?>>Masculino</option>
              <option value="F" <?php echo $gender == 'F'? 'selected': '';?>>Femenino</option>
            </select>
          </div>
          <div class="col">
            <label for="formGroupExampleInput" class="form-label negritaLetra">Teléfono:</label>
            <input name="phone" type="number" class="form-control" placeholder="Ejemplo: 9827364552" value="<?php echo $phone; ?>" required>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <label for="formGroupExampleInput" class="form-label negritaLetra">Fecha de Nacimiento:</label>
            <input name="birthdate" type="date" class="form-control" placeholder="Ejemplo: 10/03/2001" value="<?php echo $birthdate; ?>" required>
          </div>
        </div>

        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label negritaLetra">Correo Electrónico:</label>
          <input name="email" type="email" class="form-control" id="formGroupExampleInput" placeholder="Ejemplo: anthony@gmail.com" value="<?php echo $email; ?>" required>
        </div>
        <div class="mb-3">
          <label for="formGroupExampleInput2" class="form-label negritaLetra">Contraseña:</label>
          <input name="password" type="password" class="form-control" id="formGroupExampleInput" value="<?php echo $password; ?>" required>
        </div>

        <div class="mb-3">
          <label for="formGroupExampleInput2" class="form-label negritaLetra">Confirma Contraseña:</label>
          <input name="password_confirm" type="password" class="form-control" id="formGroupExampleInput" value="<?php echo $password_confirm; ?>" required>
        </div>
        <?php echo $message ? $message: ''?>
        <a class="sinSubrayado">
          <div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" class="btn btn-primary letraRoboto negritaLetra botonOvalado">CREAR CUENTA</button>
          </div>
        </a>
      </form>
    </div>

    <br>
  </main>

  <!--JS-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>