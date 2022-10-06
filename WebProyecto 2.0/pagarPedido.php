<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PONCECA</title>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <!--codigo para que la página cargue rápido-->
    <link rel="preload" href="scss/custom.css" as="style">
    <link rel="stylesheet" href="scss/custom.css">

    <!--codigo para que la página cargue rápido-->
    <link rel="preload" href="interfaz.css" as="style">
    <link href="interfaz.css" rel="stylesheet">

    <!--Icono-->  
    <link rel="shortcut icon" type="image/x-icon" href="images/LogoPaginaWeb.JPG">
       
</head>
<body class="bg-warning">
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
                    <a class="nav-link" href="nosotrosConSesion.php" >NOSOTROS</a> 
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
                    <button type="button" class="btn btn-primary btn-lg tipoLetraBoton botonPedirAhora botonPedir radioBoton">MI CUENTA</button>
                  </a>
                  
                </ul>
              </div>
            </div>
          </nav>
    </div>
    <div class="container pt-3">
        <div class="row row-cols-1 row-cols-md-2 g-3">
            <div class="col">
                <div class="row align-items-center justify-content-between pb-2">
                    <div class="col-12 col-md-4">
                        <div class="d-grid gap-2">
                            <a class="btn btn-success text-white" href="delivery-Platos.php" role="button">
                                <b>Volver a la Compra</b>
                            </a>
                        </div>    
                    </div>
                    <div class="col-12 col-md-8 text-end">
                        <h3 class="tipoLetraEBGaramond">Llenado de Datos</h3>
                    </div> 
                </div>
                <div class="card border-info">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-4">
                                <img src="images/Logo.png" class="img-fluid" alt="logo" width="100">
                            </div>
                            <div class="col-8">
                                <h2>FINALIZA TU COMPRA</h2>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="card-body">
                        <form>
                            <div class="row mb-2">
                                <div class="col-12">
                                    <label for="text" class="form-label mb-0">Nombre del titular</label>
                                    <input type="text" class="form-control">
                                </div> 
                            </div>

                            <div class="row mb-2">
                                <div class="col-12">

                                        Tarjeta Credito / Debito
                                    <input type="text" class="form-control mb-3" placeholder="Numero de tarjeta">
                                </div> 
                            </div>
                            
                            <div class="row mb-2">
                                <div class="col-12 col-sm-6">
                                    <label for="text" class="form-label mb-0">Mes y Año</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label for="text" class="form-label mb-0">CVC</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="container mt-5">
                                <img src="images/visa.JPG" class="img-fluid" alt="codigoQR" width="">
                            </div>
                            <div class="container text-center">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success rounded-3 text-white fs-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Realizar Transaccion
                                </button>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="container text-center p-2">
                                                    <img src="images/aceptar.png" class="img-fluid" alt="aceptar" width="50">
                                                </div>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container text-center tipoLetraEBGaramond">
                                                    <h4 class="fw-bolder">¡MISIÓN CUMPLIDA! </h4>
                                                    <h6>SU PEDIDO FUE FINALIZADO SATISFACTORIAMENTE</h6>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <a class="btn btn-ponceca1 text-white" href="indexConSesion.php" role="button">VOLVER A LA PÁGINA PRINCIPAL</a>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <a href="miCuentaReservas.php">
                                                            <button type="button" class="btn btn-ponceca1 text-white" >VER MI RESERVA</button>
                                                        </a>
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
            <div class="col text-end">
                <h3 class="tipoLetraEBGaramond pb-2">Comprobante de Pago</h3>
                <div class="card border-info">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-4 text-start">
                                <img src="images/Logo.png" class="img-fluid" alt="logo" width="100">
                            </div>
                            <div class="col-8 text-center">
                                <h5>COMPLEJO RECREACIONAL</h5>
                                <h4>PONCECA ECOTURISTICO</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="container text-start pb-2">
                            <table class="table table-striped">
                                <thead class="text-center bg-primary">
                                    <tr class="fs-5">
                                        <th>Cant.</th>
                                        <th>Producto</th>
                                        <th>P. Total</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <td>01</td>
                                        <td>Pollada Tradicional</td>
                                        <td>19.00</td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>Pollada Tradicional</td>
                                        <td>19.00</td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>Pollada Tradicional</td>
                                        <td>19.00</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row pb-3">
                                <div class="col-8 text-end">
                                    <h6 class="fw-bolder">Total:</h6>
                                </div>
                                <div class="col-4 text-start">
                                    <h6 class="fw-bolder">S/ 54.50</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>