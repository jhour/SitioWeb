<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recreo Ponceca</title>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    

    <!--codigo para que la página cargue rápido-->
    <link rel="preload" href="interfaz.css" as="style">
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

    <main class="container align-items-center justify-content-center alto-200 p-3 mb-3">
        <div class="container p-0">
            <div class="row p-0">
                <div class="col-9 col-sm-8 col-md-7 col-lg-6 p-0">
                    <div class="row">
                        <div class="col-4 p-0">
                            <div class="d-grid gap-2">
                                <a class="btn btn-secondary text-white border border-info" href="delivery-Platos.php" role="button">
                                    <b>Platos</b>
                                    <img src="images/comer.png" class="img-fluid" alt="comer" width="30">
                                </a>                            
                            </div>
                        </div>
                        <div class="col-4 p-0 bg-white">
                            <div class="d-grid gap-2">
                                <a class="btn btn-white border border-info" href="delivery-Entrada.php" role="button">
                                    <b>Entrada</b>
                                    <img src="images/postre.png" class="img-fluid" alt="postre" width="30">
                                </a>                            
                            </div>
                        </div>
                        <div class="col-4 p-0 bg-white">
                            <div class="d-grid gap-2">
                                <a class="btn btn-white border border-info" href="delivery-Bebidas.php" role="button">
                                    <b>Bebidas</b>
                                    <img src="images/espiritu.png" class="img-fluid" alt="Bebidas" width="30">
                                </a>                            
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-3 col-sm-4 col-md-5 col-lg-6 p-0 text-end">
                    <button class="btn border border-info bg-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <img src="images/carrito.png" class="img-fluid" alt="comer" width="30">
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header border-bottom border-info align-items-center justify-content-between pb-0">
                            <h5 class="text-ponceca1 tipoLetraEBGaramond fs-4" id="offcanvasRightLabel"><b>CARRITO DE COMPRAS</b></h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div class="container-fluid align-items-center justify-content-center p-0 pb-2">
                                <table class="table table-striped">
                                    <thead class="text-center bg-primary">
                                        <tr class="fs-5">
                                            <th>Cant.</th>
                                            <th>Producto</th>
                                            <th>P. Total</th>
                                            <th>
                                                <img src="images/carritoQuitar.png" class="img-fluid" alt="comer" width="40">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr>
                                            <td>
                                                <select class="form-select p-0" aria-label="Default select example">
                                                    <option selected>01</option>
                                                    <option value="2">02</option>
                                                    <option value="3">03</option>
                                                    <option value="4">04</option>
                                                    <option value="5">05</option>
                                                  </select>
                                            </td>
                                            <td>Pollada Tradicional</td>
                                            <td>19.00</td>
                                            <td>
                                                <button type="button" class="btn-close" aria-label="Close"></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <select class="form-select p-0" aria-label="Default select example">
                                                    <option selected>01</option>
                                                    <option value="2">02</option>
                                                    <option value="3">03</option>
                                                    <option value="4">04</option>
                                                    <option value="5">05</option>
                                                  </select>
                                            </td>
                                            <td>Pollada Tradicional</td>
                                            <td>19.00</td>
                                            <td>
                                                <button type="button" class="btn-close" aria-label="Close"></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <select class="form-select p-0" aria-label="Default select example">
                                                    <option selected>01</option>
                                                    <option value="2">02</option>
                                                    <option value="3">03</option>
                                                    <option value="4">04</option>
                                                    <option value="5">05</option>
                                                  </select>
                                            </td>
                                            <td>Pollada Tradicional</td>
                                            <td>19.00</td>
                                            <td>
                                                <button type="button" class="btn-close" aria-label="Close"></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row pb-3">
                                <div class="col-8">
                                    <h6 class="fw-bolder">Total:</h6>
                                </div>
                                <div class="col-4 text-start">
                                    <h6 class="fw-bolder">S/ 54.50</h6>
                                </div>
                            </div>
                            <div class="container text-center">
                                <a class="btn btn-success rounded-3 border border-info text-white fs-5" href="pagarPedido.php" role="button">
                                    <b>¡PAGAR AHORA!</b>
                                </a> 
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card border-info rounded-3">
                        <img src="images/platos/polladaTradicional.JPG" class="card-img-top img-thumbnail rounded-3" alt="polladaTradicional">
                        <div class="card-body text-center">
                            <div class="row pb-2 border-bottom">
                                <h5 class="card-title tipoLetraEBGaramond"><b>POLLADA TRADICIONAL</b></h5>
                                <p class="card-text">Pollo frito a presion, mote, papa, porcion cremas.</p>
                                <br>
                            </div>
                            <div class="container pb-2 p-2">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success rounded-3 text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    AÑADIR AL CARRITO
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
                                                <div class="container text-center tipoLetraEBGaramond border-bottom">
                                                    <h4 class="fw-bolder">¡MISIÓN CUMPLIDA! </h4>
                                                    <h6>SU PEDIDO FUE AGREGADO CORRECTAMENTE</h6>
                                                </div>
                                            </div>
                                            <div class="container-fluid pb-2">
                                                <button type="button" class="btn btn-ponceca1 text-white" data-bs-dismiss="modal">¡SEGUIR COMPRANDO!</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-end">
                                <div class="col-6">
                                    Desde: 
                                </div>
                                <div class="col-6">
                                    <b>S/ 19.00</b> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card border-info rounded-3">
                        <img src="images/platos/polladaEspecial.jpg" class="card-img-top img-thumbnail rounded-3" alt="polladaEspecial">
                        <div class="card-body text-center">
                            <div class="row pb-2 border-bottom">
                                <h5 class="card-title tipoLetraEBGaramond"><b>POLLADA ESPECIAL</b></h5>
                                <p class="card-text">Pollo frito a presion, choclo, ensalada, palta, aliño, cremas.</p>
                                <br>
                            </div>
                            <div class="container pb-2 p-2">
                                <button type="button" class="btn btn-success rounded-3 text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    AÑADIR AL CARRITO
                                </button>
                            </div>
                            <div class="row text-end">
                                <div class="col-6">
                                    Desde: 
                                </div>
                                <div class="col-6">
                                    <b>S/ 25.00</b> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card border-info rounded-3">
                        <img src="images/platos/chicharronEspecial.JPG" class="card-img-top img-thumbnail rounded-3" alt="chicharronEspecial">
                        <div class="card-body text-center">
                            <div class="row pb-2 border-bottom">
                                <h5 class="card-title tipoLetraEBGaramond"><b>CHICHARRON ESPECIAL</b></h5>
                                <p class="card-text">Cerdo incluye costillas, papa, choclo, aliño transparente.</p>
                                <br>
                            </div>
                            <div class="container pb-2 p-2">
                                <button type="button" class="btn btn-success rounded-3 text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    AÑADIR AL CARRITO
                                </button>
                            </div>
                            <div class="row text-end">
                                <div class="col-6">
                                    Desde: 
                                </div>
                                <div class="col-6">
                                    <b>S/ 29.00</b> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card border-info rounded-3">
                        <img src="images/platos/Chicharron.jpg" class="card-img-top img-thumbnail rounded-3" alt="chicharron">
                        <div class="card-body text-center">
                            <div class="row pb-2 border-bottom">
                                <h5 class="card-title tipoLetraEBGaramond"><b>CHICHARRON TRADICIONAL</b></h5>
                                <p class="card-text">Cerdo no incluye costilla, papa, mote, cebolla, tomate, hierva buena.</p>
                                <br>
                            </div>
                            <div class="container pb-2 p-2">
                                <button type="button" class="btn btn-success rounded-3 text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    AÑADIR AL CARRITO
                                </button>
                            </div>
                            <div class="row text-end">
                                <div class="col-6">
                                    Desde: 
                                </div>
                                <div class="col-6">
                                    <b>S/ 23.00</b> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card border-info rounded-3">
                        <img src="images/platos/chicharronTrucha.JPG" class="card-img-top img-thumbnail rounded-3" alt="chicharronTrucha">
                        <div class="card-body text-center">
                            <div class="row pb-2 border-bottom">
                                <h5 class="card-title tipoLetraEBGaramond"><b>CHICHARRON DE TRUCHA</b></h5>
                                <p class="card-text">Filete de trucha 400 gramos, yuca frita, zarza criolla, ensalada.</p>
                                <br>
                            </div>
                            <div class="container pb-2 p-2">
                                <button type="button" class="btn btn-success rounded-3 text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    AÑADIR AL CARRITO
                                </button>
                            </div>
                            <div class="row text-end">
                                <div class="col-6">
                                    Desde: 
                                </div>
                                <div class="col-6">
                                    <b>S/ 25.00</b> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card border-info rounded-3">
                        <img src="images/platos/truchaEspecial.JPG" class="card-img-top img-thumbnail rounded-3" alt="truchaEspecial">
                        <div class="card-body text-center">
                            <div class="row pb-2 border-bottom">
                                <h5 class="card-title tipoLetraEBGaramond"><b>TRUCHA ESPECIAL</b></h5>
                                <p class="card-text">Trucha 500 gramos, arroz, papa frita, precocidos, ensalada, palta.</p>
                                <br>
                            </div>
                            <div class="container pb-2 p-2">
                                <button type="button" class="btn btn-success rounded-3 text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    AÑADIR AL CARRITO
                                </button>
                            </div>
                            <div class="row text-end">
                                <div class="col-6">
                                    Desde: 
                                </div>
                                <div class="col-6">
                                    <b>S/ 24.00</b> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card border-info rounded-3">
                        <img src="images/platos/truchaVapor.JPG" class="card-img-top img-thumbnail rounded-3" alt="truchaVapor">
                        <div class="card-body text-center">
                            <div class="row pb-2 border-bottom">
                                <h5 class="card-title tipoLetraEBGaramond"><b>TRUCHA A VAPOR</b></h5>
                                <p class="card-text">Trucha 500 gramos, papa cocida, arroz, precocidos, ensalada, palta.</p>
                                <br>
                            </div>
                            <div class="container pb-2 p-2">
                                <button type="button" class="btn btn-success rounded-3 text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    AÑADIR AL CARRITO
                                </button>
                            </div>
                            <div class="row text-end">
                                <div class="col-6">
                                    Desde: 
                                </div>
                                <div class="col-6">
                                    <b>S/ 24.00</b> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card border-info rounded-3">
                        <img src="images/platos/truchaParrilla.JPG" class="card-img-top img-thumbnail rounded-3" alt="truchaParrilla">
                        <div class="card-body text-center">
                            <div class="row pb-2 border-bottom">
                                <h5 class="card-title tipoLetraEBGaramond"><b>TRUCHA A LA PARILLA</b></h5>
                                <p class="card-text">Trucha 500 gramos, papa cocida, choclo, precocidos, ensalada, palta .</p>
                                <br>
                            </div>
                            <div class="container pb-2 p-2">
                                <button type="button" class="btn btn-success rounded-3 text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    AÑADIR AL CARRITO
                                </button>
                            </div>
                            <div class="row text-end">
                                <div class="col-6">
                                    Desde: 
                                </div>
                                <div class="col-6">
                                    <b>S/ 25.00</b> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card border-info rounded-3">
                        <img src="images/platos/cuyChactado.jpg" class="card-img-top img-thumbnail rounded-3" alt="cuyChactado">
                        <div class="card-body text-center">
                            <div class="row pb-2 border-bottom">
                                <h5 class="card-title tipoLetraEBGaramond"><b>CUY CHACTADO</b></h5>
                                <p class="card-text">Cuy dorado, papa sancochada, mote, lechuga, tomate, brocoli, pepino.</p>
                                <br>
                            </div>
                            <div class="container pb-2 p-2">
                                <button type="button" class="btn btn-success rounded-3 text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    AÑADIR AL CARRITO
                                </button>
                            </div>
                            <div class="row text-end">
                                <div class="col-6">
                                    Desde: 
                                </div>
                                <div class="col-6">
                                    <b>S/ 40.00</b> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card border-info rounded-3">
                        <img src="images/platos/cuyEspecial.JPG" class="card-img-top img-thumbnail rounded-3" alt="cuyEspecial">
                        <div class="card-body text-center">
                            <div class="row pb-2 border-bottom">
                                <h5 class="card-title tipoLetraEBGaramond"><b>CUY ESPECIAL</b></h5>
                                <p class="card-text">Cuy de 800 g a 1 kg, papa, choclo, col, arbeja, aliño transparente.</p>
                                <br>
                            </div>
                            <div class="container pb-2 p-2">
                                <button type="button" class="btn btn-success rounded-3 text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    AÑADIR AL CARRITO
                                </button>
                            </div>
                            <div class="row text-end">
                                <div class="col-6">
                                    Desde: 
                                </div>
                                <div class="col-6">
                                    <b>S/ 43.00</b> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card border-info rounded-3">
                        <img src="images/platos/cuyCrocante.JPG" class="card-img-top img-thumbnail rounded-3" alt="cuyCrocante">
                        <div class="card-body text-center">
                            <div class="row pb-2 border-bottom">
                                <h5 class="card-title tipoLetraEBGaramond"><b>CUY CROCANTE</b></h5>
                                <p class="card-text">Cuy, papa, choclo, aji de cilantro, ensalada, especias naturales.</p>
                                <br>
                            </div>
                            <div class="container pb-2 p-2">
                                <button type="button" class="btn btn-success rounded-3 text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    AÑADIR AL CARRITO
                                </button>
                            </div>
                            <div class="row text-end">
                                <div class="col-6">
                                    Desde: 
                                </div>
                                <div class="col-6">
                                    <b>S/ 43.00</b> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card border-info rounded-3">
                        <img src="images/platos/tallarinPollo.JPG" class="card-img-top img-thumbnail rounded-3" alt="tallarinPollo">
                        <div class="card-body text-center">
                            <div class="row pb-2 border-bottom">
                                <h5 class="card-title tipoLetraEBGaramond"><b>TALLARIN DE CASA CON POLLO</b></h5>
                                <p class="card-text">Tallarin de casa, pollo dorado, rocoto relleno, papa a la huancaina.</p>
                                <br>
                            </div>
                            <div class="container pb-2 p-2">
                                <button type="button" class="btn btn-success rounded-3 text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    AÑADIR AL CARRITO
                                </button>
                            </div>
                            <div class="row text-end">
                                <div class="col-6">
                                    Desde: 
                                </div>
                                <div class="col-6">
                                    <b>S/ 25.00</b> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card border-info rounded-3">
                        <img src="images/platos/tallarinChicharron.JPG" class="card-img-top img-thumbnail rounded-3" alt="tallarinChicharron">
                        <div class="card-body text-center">
                            <div class="row pb-2 border-bottom">
                                <h5 class="card-title tipoLetraEBGaramond"><b>TALLARIN DE CASA CON CHICHARRON</b></h5>
                                <p class="card-text">Tallarin de casa, chicharron, rocoto relleno, papa a la huancaina.</p>
                                <br>
                            </div>
                            <div class="container pb-2 p-2">
                                <button type="button" class="btn btn-success rounded-3 text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    AÑADIR AL CARRITO
                                </button>
                            </div>
                            <div class="row text-end">
                                <div class="col-6">
                                    Desde: 
                                </div>
                                <div class="col-6">
                                    <b>S/ 27.00</b> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card border-info rounded-3">
                        <img src="images/platos/parrillaPollo.JPG" class="card-img-top img-thumbnail rounded-3" alt="parrillaPollo">
                        <div class="card-body text-center">
                            <div class="row pb-2 border-bottom">
                                <h5 class="card-title tipoLetraEBGaramond"><b>PECHUGA DE POLLO A LA PARRILLA</b></h5>
                                <p class="card-text">Filete de pollo 300 g, papa frita, arroz, palta, ensalada, brocoli.</p>
                                <br>
                            </div>
                            <div class="container pb-2 p-2">
                                <button type="button" class="btn btn-success rounded-3 text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    AÑADIR AL CARRITO
                                </button>
                            </div>
                            <div class="row text-end">
                                <div class="col-6">
                                    Desde: 
                                </div>
                                <div class="col-6">
                                    <b>S/ 25.00</b> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card border-info rounded-3">
                        <img src="images/platos/parillaLomo.JPG" class="card-img-top img-thumbnail rounded-3" alt="parillaLomo">
                        <div class="card-body text-center">
                            <div class="row pb-2 border-bottom">
                                <h5 class="card-title tipoLetraEBGaramond"><b>LOMO FINO A LA PARRILLA</b></h5>
                                <p class="card-text">Lomo fino 400 g, papa frita, palta, pepino, ensalada, albiño blanco.</p>
                                <br>
                            </div>
                            <div class="container pb-2 p-2">
                                <button type="button" class="btn btn-success rounded-3 text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    AÑADIR AL CARRITO
                                </button>
                            </div>
                            <div class="row text-end">
                                <div class="col-6">
                                    Desde: 
                                </div>
                                <div class="col-6">
                                    <b>S/ 39.00</b> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    

    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>