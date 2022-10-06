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
              <a class="navbar-brand" href="index.php"> 
                <img src="imagenes/logo.PNG" alt="" height="100"> 
              </a>
              
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="nosotros.php" >NOSOTROS</a> 
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal"  data-bs-target="#reservaEvento">RESERVA DE EVENTOS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#pedirAhora">PEDIR AHORA</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="indexConSesion.php#contacto">CONTACTO</a>
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
          <a class="sinSubrayado" href="accederCuenta.php" >
            <div class="d-grid gap-2 col-6 mx-auto">
              <button type="button" class="btn btn-primary letraRoboto negritaLetra botonOvalado" id="acceder" >INICIAR SESIÓN</button> <br>
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
          <a class="sinSubrayado" href="accederCuenta.php" >
            <div class="d-grid gap-2 col-6 mx-auto">
              <button type="button" class="btn btn-primary letraRoboto negritaLetra botonOvalado" id="acceder" >INICIAR SESIÓN</button> <br>
          </div> 
          </a> 
        </div>
      </div>
    </div>


    <!--PRESENTACION DE MISION VISION-->
    <main>
      <br>
        <div class="container ">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                  <div class="card">
                    <img src="imagenes/Restaurante 2.jpg" class="card-img-top" alt="...">
                  </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="imagenes/Restaurante.PNG" class="card-img-top" alt="..."> 
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container fondoBlanco">
            <div class="row">
                <h2 class="centrarTexto negritaTextoNosotros textoNosotros">
                    "Recreo Ponceca simplemente para estar con la familia" <br>
                                ¡BIENVENIDOS!
                </h2>
            </div>
    
            <div class="row ">
                <h5 class="negritaTextoNosotros textoNosotros">
                    MISIÓN
                </h4>
                <p>
                    Nuestro compromiso es brindar a nuestros clientes productos alimenticios de calidad, nutritivos y saludables; en un ambiente ecoturístico, acompañado de un excelente servicio, ayudando al desarrollo de nuestros colaboradores y generando valor para nuestros accionistas. <br>
                </p>

                <h5 class="negritaTextoNosotros textoNosotros">
                    VISIÓN
                </h4>

                <p>
                    Ser líder en nuestro sector a nivel regional siendo la mejor opción a la hora de comer en familia y amigos. <br>
                </p>

                <h5 class="negritaTextoNosotros textoNosotros">
                    PRINCIPIOS
                </h4>
                <p>
                    <ul>
                        <li type="disc">Satisfacción del Cliente: Ofrecer a nuestros clientes una experiencia de servicio positiva a través de nuestros productos, servicios y atención.</li>
    
                        <li type="disc">Eficiencia: Cuidar los recursos de la empresa como si fueran los propios.
                        </li>
    
                        <li type="disc">
                            Transparencia: Actuar de manera abierta, honesta y transparente con tus compañeros y clientes para establecer con ellos relaciones duraderas.</li>
    
                        <li type="disc">Disciplina: Ser ordenado y estructurado para aplicar consistentemente los procesos y modelos de trabajo establecidos.</li>
    
                        <li type="disc">Trabajo en equipo: Colaborar de manera organizada para alcanzar las metas  del equipo de trabajo.</li>
                    </ul>
                </p>
            </div>
        </div>
        <br>
    </main>

    <footer class="footer">
        <p>Recreo campestre Ponceca Ecoturismo. Todos los derechos reservados 2022.</p> 
    </footer>

    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</body>
</html>