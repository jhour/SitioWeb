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

    <link rel="stylesheet" href="styles.css"/>

    <!--Icono-->  
    <link rel="shortcut icon" type="image/x-icon" href="images/LogoPaginaWeb.JPG">
</head>
<body>
    
    <!--BARRA DE NAVEGACIÓN-->
    <nav class="navbar bg-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="indexConSesion.php"> 
            <img src="imagenes/logo.PNG" alt="" height="100"> 
          </a>
            <p class="tipoLetraAdmi">
                SECCIÓN ADMINISTRADOR
            </p>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title formatoTitulo" id="offcanvasNavbarLabel">MENÚ</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link " aria-current="page" href="administradorCarta.php">Actualizar Carta</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="administradorEvento.php">Actualizar Evento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Reservas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="administradorReservasDelivery.php">Delivery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="accederCuenta.php?logout=true">Cerrar Sesión</a>
                </li>
              </ul>
              
            </div>
          </div>
        </div>
    </nav>

    <main>
        <br><br><br><br><br><br><br><br>
        <div class="container">
            <div class="col">
               
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col">
                        <h5 class="form-control bordenBoton card-title centrarTexto negritaTextoNosotros letraEB negritaLetra centrarTexto tamañoLetraActualiarPlato">RESERVAS</h5>
                    </div>
                    <div class="col-4"></div>
                    <div class="col">
                      <div class="col">
                        <input type="date" class="form-control" placeholder="Ejemplo: 202" aria-label="Last name">
                      </div>

                      <a class="sinSubrayado" href="#" >
                        <div class="d-grid gap-2 col mx-auto ">
                          <button type="button" class="btn btn-primary letraRoboto negritaLetra botonOvalado botonLetraActualizar">BUSCAR</button> <br>
                        </div> 
                    </a>
                    </div>
                </div>

            </div>  
        </div>
        <br>
      <div class="container">
        <div class="table-container ">
            <table class="table-rwd">
              <thead>
                <tr>
                  <th></th>
                  <th>CLIENTE</th>
                  <th>N° CELULAR</th>
                  <th>EVENTO</th>
                  <th>PRECIO EVENTO (S/.)</th>
                  <th>FECHA RESERVADA</th>
                  <th>HORA</th>
                  <th>CARTA</th>
                  <th>PRECIO CARTA (S/.)</th>
                  <th>TOTAL (S/.)</th>
                  <th>COMPLETADO</th>
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
                  S.Precio AS S_Precio,   
                  C.Nombre As C_Nombre,  
                  C.Telefono As C_Telefono  
                  FROM Reserva R
                  INNER JOIN Cliente C
                  ON C.IdCliente = R.IdCliente
                  INNER JOIN Servicio S
                  ON S.IdServicio = R.IdServicio';

             //FROM Reserva R
               // INNER JOIN Servicio S
                //  ON S.IdServicio = R.IdServicio
                //INNER JOIN Cliente C
                //  ON C.IdCliente = R.IdReserva';

                $query = $connection->query($sql);

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
                    
                    $C_Nombre = $row['C_Nombre']; 
                    $C_Telefono = $row['C_Telefono']; 
                    // <td>$R_IdReserva</td>
                    echo "
                    <tr>
                      <td>$R_IdReserva</td>
                      <td>$C_Nombre</td>
                      <td>$C_Telefono</td>
                      <td>$S_Categoria</td>
                      <td>$S_Precio</td>
                      <td>$R_FechaReserva</td>
                      <td>$R_HoraInicio a $R_HoraFin</td>
                      <td>Sin carta (solo reserva)</td>
                      <td>$R_PrecioTotalDetalle</td>
                      <td>$R_PrecioTotal</td>
                      <td>
                        
                        <div class='d-grid gap-2 col mx-auto '>
                          <input type='checkbox' class='check'>  
                        </div> 
                        <br>

                        <a class='sinSubrayado' href='#' >
                          <div class='d-grid gap-2 col mx-auto '>
                            <button type='button' class='btn btn-danger letraRoboto negritaLetra botonOvalado botonLetraActualizar'>ELIMINAR</button> <br>
                          </div> 
                        </a>
                      </td>
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