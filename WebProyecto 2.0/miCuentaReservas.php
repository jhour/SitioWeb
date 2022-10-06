<?php
include_once 'database/database.php';
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

  <link rel="stylesheet" href="styles.css" />

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
  <!--Cuerpo principal-->
  <main>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-lg col-md-3 col-sm-12"">
                    <a class=" sinSubrayado" href="#">
          <div class="d-grid gap-2 col-6 mx-auto ">
            <button type="button" class="btn btn-primary tituloReservarEvento tamañoBotonReservar colorBoton  letraRoboto negritaLetra">MIS RESERVAS</button> <br>
          </div>
          </a>
        </div>
        <div class="col-lg col-md-3 col-sm-12">
          <a class="sinSubrayado" href="miCuentaPerfil.php">
            <div class="d-grid gap-2 col-6 mx-auto ">
              <button type="button" class="btn btn-primary tituloReservarEvento tamañoBotonReservar colorBotonSecundario  letraRoboto negritaLetra">MI PERFIL</button> <br>
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
    <h4 class="card-title centrarTexto negritaTextoNosotros letraEB negritaLetra centrarTexto estiloLetraCuenta">MIS RESERVAS</h4>

    <div class="container">
      <div class="table-container">
        <table class="table-rwd">
          <thead>
            <tr>
              <th></th>
              <th>EVENTO</th>
              <th>PRECIO EVENTO (S/.)</th>
              <th>FECHA RESERVADA</th>
              <th>HORA</th>
              <th>CARTA</th>
              <th>PRECIO CARTA (S/.)</th>
              <th>TOTAL (S/.)</th>
            </tr>

          </thead>
          <tbody>

            <?php

            $db = new Database();
            $connection = $db->connection;
            $sql = 'SELECT 
              R.IdReserva AS R_IdReserva,
              R.FechaReserva AS R_FechaReserva,
              R.PrecioTotalDetalle AS R_PrecioTotalDetalle,
              R.PrecioTotal AS R_PrecioTotal,
              R.HoraInicio AS R_HoraInicio,
              R.HoraFin AS R_HoraFin,
              S.Categoria AS S_Categoria,
              S.Precio AS S_Precio
            FROM Reserva R
            INNER JOIN Servicio S
              ON S.IdServicio = R.IdServicio
            WHERE IdCliente = ?'; //para cada cliente imprimir su propia lista de reservas

            $query = $connection->prepare($sql);
            $query->execute([$_SESSION['IdCliente']]);

            $rows = $query->fetchAll(PDO::FETCH_ASSOC);

            if ($rows) {
              foreach ($rows as $row) {
                $R_IdReserva = $row['R_IdReserva']; 
                $R_FechaReserva = substr($row['R_FechaReserva'], 0, 10);
                $R_PrecioTotalDetalle = number_format($row['R_PrecioTotalDetalle'], 2);
                $R_PrecioTotal = number_format($row['R_PrecioTotal'], 2);
                $R_HoraInicio = substr($row['R_HoraInicio'], 0, 5);
                $R_HoraFin = substr($row['R_HoraFin'], 0, 5);

                $S_Categoria = $row['S_Categoria'];
                $S_Precio = number_format($row['S_Precio'], 2);
                
                // <td>$R_IdReserva</td>
                echo "
                <tr>
                  <td> » </td>
                  <td>$S_Categoria</td>
                  <td>$S_Precio</td>
                  <td>$R_FechaReserva</td>
                  <td>$R_HoraInicio a $R_HoraFin</td>
                  <td style='text-align: left;'>
                ";
                  /**Para detalle de consumible */
                $query2 = $connection -> prepare('SELECT
                  DR.Cantidad AS DR_Cantidad,
                  DR.Subtotal AS DR_Subtotal,
                  P.Nombre AS P_Nombre
                FROM DetalleReserva DR
                INNER JOIN Producto P
                  ON P.IdProducto = DR.IdProducto
                WHERE IdReserva = ?
                ');
                $query2 -> execute([$R_IdReserva]);
                $rows2 = $query2 -> fetchAll(PDO::FETCH_ASSOC);

                if ($rows2) {
                  echo '<ul>';
                  foreach($rows2 as $row2) {
                    $DR_Cantidad = $row2['DR_Cantidad'];
                    $DR_Subtotal = number_format($row2['DR_Subtotal'], 2);
                    $P_Nombre = $row2['P_Nombre'];
                    echo "<li>$DR_Cantidad $P_Nombre ($DR_Subtotal)</li>";
                  }
                  echo '</ul>';
                } else {
                  echo 'Sin carta (solo reserva)';
                }

                echo "
                  </td>
                  <td>$R_PrecioTotalDetalle</td>
                  <td>$R_PrecioTotal</td>
                </tr>
                ";
              }
            }

            ?>
            </tbody>
        </table>
      </div>
      <br>
    </div>
  </main>

  <!--JS-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>