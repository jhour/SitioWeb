<?php

include_once 'database/database.php';

$db = new Database();
$connection = $db->connection;

if (
  isset($_POST['id']) &&
  isset($_POST['name']) &&
  isset($_POST['type']) &&
  isset($_POST['description']) &&
  isset($_POST['image']) &&
  isset($_POST['price'])
) {
  $sql = '';
  $data = [
    ':name' => $_POST['name'],
    ':description' => $_POST['description'],
    ':image' => $_POST['image'],
    ':price' => $_POST['price'],
    ':type' => $_POST['type']
  ];
  if (empty($_POST['id'])) { //si no existe id es porque es nuevo, asi que se le inserta
    $sql = 'INSERT INTO Producto VALUES (:name, :description, :image, :price, :type)';
  } else { //si existe significa que queremos modificar
    $sql = 'UPDATE Producto SET
      Nombre = :name,
      Descripción = :description,
      Imagen = :image,
      Precio = :price,
      IdCategoriaProd = :type
    WHERE IdProducto = :id
    ';
    $data[':id'] = $_POST['id'];
  }
  $query = $connection -> prepare($sql);
  $query -> execute($data);
  $rowCount = $query -> rowCount();

  if ($rowCount) {
    echo '<script>alert("El producto se guardó correctamente")</script>';
  } else {
    echo '<script>alert("No se pudo guardar el producto")</script>';
  }
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

  <!--codigo para que la página cargue rápido-->
  <link rel="preload" href="interfaz.css" as="style">
  <link href="interfaz.css" rel="stylesheet">

  <link rel="stylesheet" href="styles.css" />

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
              <a class="nav-link active" aria-current="page" href="#">Actualizar Carta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="administradorEvento.php">Actualizar Evento</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="administradorReservas.php">Reservas</a>
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
          <div class="col-2"></div>
          <div class="col">
            <h5 class="form-control bordenBoton card-title centrarTexto negritaTextoNosotros letraEB negritaLetra centrarTexto tamañoLetraActualiarPlato">ACTUALIZAR CARTA</h5>
          </div>

          <div class="col">
            <a class="sinSubrayado">
              <div class="d-grid gap-2 col-6 mx-auto ">  <!-- id carta  v-->
                <button id="add-carta" type="button" class="btn btn-primary tituloReservarEvento   letraRoboto negritaLetra botonOvalado ">AGREGAR CARTA</button> <br>
              </div>
            </a>
          </div>

        </div>
      </div>
    </div>
<!--Desplegable - jQuery  - js -->
    <form method="POST" class="card mx-auto" id="formulario" style="width: 28rem; height: max-content; padding: 20px; display:none">
      <h2 id="titulo">Agregar un producto</h2><br>
      <input type="hidden" name="id" id="id" value="" required>
      <div class="form-group">
        <label for="name">Nombre del producto</label>
        <input type="text" name="name" id="name" class="form-control" required>
      </div><br>
      <div class="form-group">
        <label for="type">Tipo de producto</label>
        <select name="type" id="type" class="form-control" required>
          <?php

          $query = $connection->query('SELECT * FROM CategoriaProducto');
          $rows = $query->fetchAll(PDO::FETCH_ASSOC);

          foreach ($rows as $row) {
            $IdCategoria = $row['IdCategoria'];
            $Denominacion = $row['Denominacion'];
            echo "<option value='$IdCategoria'>$Denominacion</option>";
          }
          ?>
        </select>
      </div><br>
      <div class="form-group">
        <label for="description">Descripción de producto</label>
        <textarea type="text" name="description" id="description" class="form-control" required></textarea>
      </div><br>
      <div class="form-group">
        <label for="image">Imagen del producto</label>
        <?php
        $images = array();
        $images['1'] = array_diff(scandir('./images/platos'), array('..', '.'));
        $images['2'] = array_diff(scandir('./images/entrada'), array('..', '.'));
        $images['3'] = array_diff(scandir('./images/bebidas'), array('..', '.'));

        echo "<select name='image' required id='image' class='form-control' data='" . json_encode($images) . "'>";

        foreach ($images['1'] as $image) {
          echo "<option value='$image'>$image</option>";
        }
        ?>
        </select>
      </div><br>
      <div class="form-group">
        <label for="price">Precio del producto</label>
        <input type="number" name="price" id="price" class="form-control" required>
      </div><br>
      <input id="guardar" type="submit" class="btn btn-success" value="Guardar producto">
    </form>
    <br>
    
    
    <!--TABLA-->
    <div class="container">
      <div class="table-container ">
        <table class="table table-rwd">
          <thead>
            <tr>
              <th>ID</th>
              <th>NOMBRE DEL PLATO</th>
              <th>TIPO</th>
              <th>DESCRIPCIÓN</th>
              <th>IMAGEN</th>
              <th width="125px">PRECIO (S/.)</th>
              <th>ACCIÓN</th>
            </tr>
          </thead>
          <tbody>
            <?php



            $query = $connection->query('SELECT P.*, CP.* FROM Producto P
                INNER JOIN CategoriaProducto CP
                  ON P.IdCategoriaProd = CP.IdCategoria');

            $rows = $query->fetchAll(PDO::FETCH_ASSOC);

            if ($rows) {
              foreach ($rows as $row) {
                $data = json_encode($row);
                $IdProducto = $row['IdProducto'];
                $Nombre = $row['Nombre'];
                $Denominacion = $row['Denominacion'];
                $Descripcion = $row['Descripción'];
                $Imagen = $row['Imagen'];
                $Precio = number_format($row['Precio'], 2);
                echo "
                <tr data='$data'>
                  <td style='width: 5px'>$IdProducto</td>
                  <td>$Nombre</td>
                  <td>$Denominacion</td>
                  <td>$Descripcion</td>
                  <td>$Imagen</td>
                  <td>S/ $Precio</td>
                  <td>
                    <button id='btn-update' data-id='btn-update-$IdProducto'
                      product-id='$IdProducto' type='button' 
                      class='btn btn-primary letraRoboto negritaLetra botonOvalado botonLetraActualizar'>ACTUALIZAR</button><br>
                    <button id='btn-delete' data-id='btn-delete-$IdProducto'
                      product-id='$IdProducto' type='button' 
                      class='btn btn-danger letraRoboto negritaLetra botonOvalado botonLetraActualizar'>ELIMINAR</button>
                  </td>
                </tr>
                ";
              }
            } else {
              echo '<tr><td colspan="7">No hay productos agregados</td></tr>';
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
  <script> 
    function fn_imagen(type, value) { //para obtener lista de imagenes
      var data = JSON.parse($('#image').attr('data'));
      $('#image').empty();
      for (let key in data[type]) {
        let image = data[type][key];
        $('#image').append(`<option value="${image}">${image}</option>`);
      }
      $('#image').val(value);
    }

    $('#type').change(function() {
      var type = $(this).val();
      fn_imagen(type, null);
    })
    $(document).on('click', '#add-carta', function() { //función agregar

      $('#titulo').text('Agregar un producto');

      $('#id').val('');
      $('#name').val(null);
      $('#type').val(null).trigger('change');
      $('#description').val(null);
      $('#image').val(null);
      $('#price').val(null);
      $('#formulario').toggle(250);

      $('#guardar').val('Agregar producto');
    });
    $(document).on('click', '#btn-update', function() { //función actualizar
      var tr = $(this).parents('tr');
      var data = JSON.parse($(tr).attr('data'));

      $('#titulo').text('Actualizar ' + data.Nombre);

      $('#id').val(data.IdProducto); //obteniendo los valores de la base de datos
      $('#name').val(data.Nombre);
      $('#type').val(data.IdCategoria);
      $('#description').val(data.Descripción);
      fn_imagen(data.IdCategoria, data.Imagen);
      $('#price').val(data.Precio);
      $('#formulario').show(250);

      $('#guardar').val('Actualizar producto');
    })
  </script>
</body>

</html>