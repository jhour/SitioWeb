<?php

include_once 'database/database.php';

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

<body class="colorBody">
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

  <!--CUERPO PRINCIPAL-->
  <main>
    <h2 class="centrarTexto tituloReservarEvento">
      SELECCIONA UN EVENTO
    </h2>

    <div class="container fondoBlanco">
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card">
            <img src="" id="imagen-servicio" class="card-img-top" alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card">
            <table class="table table-hover">
              <tbody>
                <tr>
                  <td class="centrarTexto tituloReservarEvento">Tipo de evento:</td>
                  <td class="letrasDescripcion">
                    <select name="color" id="evento">
                      <?php
                      $db = new Database();
                      $connection = $db->connection;

                      $query = $connection->query('SELECT * FROM Servicio WHERE idServicio!=4');

                      $rows = $query->fetchAll(PDO::FETCH_ASSOC);

                      foreach ($rows as $row) {
                        $data = json_encode($row);
                        $IdServicio = $row['IdServicio'];
                        $Categoria = $row['Categoria'];
                        echo "<option value='$IdServicio' data-servicio='$data'>$Categoria</option>";
                      }
                      ?>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td class="centrarTexto tituloReservarEvento">Descripción:</td>
                  <td class="letrasDescripcion" id="descripcion-servicio"></td>
                </tr>
                <tr>
                  <td class="centrarTexto tituloReservarEvento">Precio:</td>
                  <td class="letrasDescripcion">S/ <span id="costo-servicio"></span></td>
                </tr>
              </tbody>

            </table>
            <a class="sinSubrayado">
              <div class="d-grid gap-2 col-6 mx-auto letraRoboto">
                <button id="reservar" class="btn btn-primary tituloReservarEvento tamañoBotonReservar colorBoton  letraRoboto negritaLetra botonOvalado" type="button">¡Reservar ahora!</button>
              </div>
            </a>

          </div>
          <br>
        </div>
      </div>
    </div>
  </main>

  <!--JS-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  <script>
    function pintarServicio(data) {
      document.getElementById('imagen-servicio').src = `imagenes/${data.Imagen}`;
      document.getElementById('descripcion-servicio').innerText = data.Descripcion;
      document.getElementById('costo-servicio').innerText = parseFloat(data.Precio).toFixed(2);
    }

    var select = document.querySelector('#evento');
    select.addEventListener('change', function() {
      var value = this.value;
      var option = document.querySelector(`[value="${value}"]`);
      var data = JSON.parse(option.getAttribute('data-servicio'));
      pintarServicio(data);
    })

    select.dispatchEvent(new Event('change'));

    document.querySelector('#reservar').addEventListener('click', function() {
      var data = {};
      var value = select.value;
      var option = document.querySelector(`[value="${value}"]`);
      localStorage.setItem('servicio', option.getAttribute('data-servicio'));
      location.href = './reservarEventosFechaHora.php';
    })
  </script>
</body>

</html>