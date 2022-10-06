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
  <!--otros
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
      -->
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
  <form id="frm-reservar">
    <h2 class="centrarTexto tituloReservarEvento">
      <br>
      SELECCIONAR FECHA Y HORA DISPONIBLE
    </h2>
    <div class="container fondoBlanco">
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">ELIGE FECHA</h5>
              <div class="col">
                <input id="fecha" required type="date" class="form-control" placeholder="Ejemplo: 202" aria-label="Last name">
              </div>
              <br>
              <br>
              <br>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">ELIGE HORA</h5>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Hora Inicio</th>
                    <th scope="col">Hora Fin</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="letrasDescripcion">
                      <select class="ancharBoton form-control" name="color" id="horainicio" required>
                        <option value="09:00">9:00</option>
                        <option value="10:00">10:00</option>
                        <option value="11:00">11:00</option>
                        <option value="12:00">12:00</option>
                        <option value="13:00">13:00</option>
                        <option value="14:00">14:00</option>
                        <option value="15:00">15:00</option>
                        <option value="16:00">16:00</option>
                      </select>
                    </td>
                    <td class="letrasDescripcion">
                      <select class="ancharBoton form-control" name="color" id="horafin" required>
                        <option value="10:00">10:00</option>
                        <option value="11:00">11:00</option>
                        <option value="12:00">12:00</option>
                        <option value="13:00">13:00</option>
                        <option value="14:00">14:00</option>
                        <option value="15:00">15:00</option>
                        <option value="16:00">16:00</option>
                        <option value="17:00">17:00</option>
                      </select>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
      <br>
      <button type="submit" id="btn-reservar" class="btn btn-primary tituloReservarEvento tamañoBotonReservar colorBoton letraRoboto negritaLetra botonOvalado">Siguiente</button>
      <button style="display: none;" type="button" id="show-modal" data-bs-toggle="modal" data-bs-target="#siguienteFechaHora"></button>
      
    </div>
    <br>
  </form>
  <!-- Modal RESERVAR EVENTO-->
  <div class="modal fade" id="siguienteFechaHora" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="siguienteFechaHora">¿DESEA RESERVAR COMIDA?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <a class="sinSubrayado" id="evento-Platos">
          <div class="d-grid gap-2 col-6 mx-auto ">
            <button type="button" class="btn btn-primary tituloReservarEvento tamañoBotonReservar colorBoton  letraRoboto negritaLetra botonOvalado">¡SI DESEO RESERVAR!</button> <br>
          </div>
        </a>
        <a class="sinSubrayado" id="reservarEventosPagos">
          <div class="d-grid gap-2 col-6 mx-auto ">
            <button type="button" class="btn btn-primary tituloReservarEvento tamañoBotonReservar colorBoton  letraRoboto negritaLetra botonOvalado">NO</button> <br>
          </div>
        </a>
      </div>
    </div>
  </div>
  <!--JS-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  <script>
    var reservarEventosPagos = document.getElementById('reservarEventosPagos');
    var frm_reservar = document.getElementById('frm-reservar');
    frm_reservar.addEventListener('submit', function(e) {
      e.preventDefault();
      document.getElementById('show-modal').dispatchEvent(new Event('click'));
    })
    reservarEventosPagos.addEventListener('click', function() {
      var datetime = {};
      datetime.date = document.getElementById('fecha').value;
      datetime.start = document.getElementById('horainicio').value;
      datetime.end = document.getElementById('horafin').value;
      localStorage.setItem('datetime', JSON.stringify(datetime));
      location.href = './reservarEventosPagos.php';
    })
  </script>
</body>
</html>