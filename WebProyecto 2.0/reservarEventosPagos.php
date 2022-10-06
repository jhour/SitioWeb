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
  <!--otros-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
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
    <br>
    <div class="container fondoBlanco">
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title centrarTexto negritaTextoNosotros">TU RESERVA</h5>
              <table class="table">
                <tbody>
                <tr>
                    <td>EVENTO:</td>
                    <td id="Categoria">Boda</td>
                  </tr>
                  <tr>
                    <td>PRECIO EVENTO:</td>
                    <td>S/ <span id="Precio">400.00</span></td>
                  </tr>
                  <tr>
                    <td>FECHA:</td>
                    <td id="date">22/06/2022</td>
                  </tr>
                  <tr>
                    <td>HORA:</td>
                    <td><span id="start">9:00</span> - <span id="end">13:00</span></td>
                  </tr>
                  <tr>
                    <td>CARTA</td>
                    <td id="carta">Pollada tradicional
                      40 x S/19.00 <br>
                      Ccapchi de queso
                      30 x S/10.00 <br>
                      Gaseosa de 2L
                      22 x S/10.00
                    </td> 
                  </tr>
                  <tr>
                    <td>SUBTOTAL:</td>
                    <td>S/ <span id="subtotal">1280.00</span></td>
                  </tr>
                  <tr>
                    <td>TOTAL:</td>
                    <td>S/ <span id="total">1680.00</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title centrarTexto negritaTextoNosotros">REALIZAR PAGO</h5>
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nombre del titular:</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ejemplo: Anthony Crespo Palomino">
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Número de tarjeta:</label>
                <input type="number" ondrop="return false;" onpaste="return false;" onkeypress="return event.charCode>=48 && event.charCode<=57" required class="form-control" id="formGroupExampleInput2" placeholder="Ejemplo: 4214100254031928">
              </div>
              <div class="row">
                <div class="col">
                  <label for="formGroupExampleInput" class="form-label">Mes y Año:</label>
                  <input type="text" class="form-control" placeholder="Ejemplo: 03/24" aria-label="First name">
                </div>
                <div class="col">
                  <label for="formGroupExampleInput" class="form-label">CVC:</label>
                  <input type="text" class="form-control" placeholder="Ejemplo: 202" aria-label="Last name">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
      <br>
      <button id="btn_finalizar" class="btn btn-primary tituloReservarEvento tamañoBotonReservar colorBoton  letraRoboto negritaLetra botonOvalado" type="button">¡FINALIZAR RESERVA!</button>
      <button id="btn_modal" style="display: none;" type="button" data-bs-toggle="modal" data-bs-target="#siguienteFinalizarReserva"></button>
    </div>
    <br>
  </main>
  <!-- Modal RESERVAR EVENTO-->
  <div class="modal fade" id="siguienteFinalizarReserva" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content ">
        <div class="modal-header">
          <img src="data:image/png;base64,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" />
          <h5 id="message" class="modal-title letraEB negritaLetra">¡MISIÓN CUMPLIDA! <br>
            SE HA RESERVADO SU EVENTO SATISFACTORIAMENTE</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <a class="sinSubrayado" href="indexConSesion.php">
          <div class="d-grid gap-2 col-6 mx-auto letraRoboto">
            <button type="button" class="btn btn-primary tituloReservarEvento tamañoBotonReservar botonOvalado">VOLVER A PÁGINA PRINCIPAL</button> <br>
          </div>
        </a>
        <a class="sinSubrayado" href="miCuentaReservas.php">
          <div class="d-grid gap-2 col-6 mx-auto letraRoboto">
            <button type="button" class="btn btn-primary tituloReservarEvento tamañoBotonReservar botonOvalado">VER MI RESERVA</button> <br>
          </div>
        </a>
      </div>
    </div>
  </div>
  <!--JS-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  <script>
    var servicio = JSON.parse(localStorage.getItem('servicio'));
    var datetime = JSON.parse(localStorage.getItem('datetime'));
    var carta = localStorage.carta ? JSON.parse(localStorage.carta) : [];
    document.getElementById('Categoria').innerText = servicio.Categoria;
    document.getElementById('Precio').innerText = parseFloat(servicio.Precio).toFixed(2);
    document.getElementById('date').innerText = datetime.date;
    document.getElementById('start').innerText = datetime.start;
    document.getElementById('end').innerText = datetime.end;
    var totalCarta = 0;
    if (carta.length > 0) {
      document.getElementById('carta').innerText = 'Tiene carta'
    } else {
      document.getElementById('carta').innerText = 'Sin Carta';
    }
    document.getElementById('subtotal').innerText = totalCarta.toFixed(2);
    document.getElementById('total').innerText = (totalCarta + parseFloat(servicio.Precio)).toFixed(2);
    document.querySelector('#btn_finalizar').addEventListener('click', async function() {
      var request = {};
      request.date = datetime.date;
      request.subtotal = totalCarta;
      request.total = totalCarta + parseFloat(servicio.Precio);
      request.start = datetime.start;
      request.end = datetime.end;
      request._service = servicio.IdServicio;
      request.menu = carta;
      var res = await fetch('registrarEvento.php', {
        method: 'POST',
        body: JSON.stringify(request)
      });
      var data = await res.json();
      document.querySelector('#btn_modal').dispatchEvent(new Event('click'));
      document.querySelector('#message').innerHTML(data.message);
    })
  </script>
</body>
</html>