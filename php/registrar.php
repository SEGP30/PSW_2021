<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/styles.css">
    <title>Registrar - PCElectronics - Inventario</title>
</head>
<body>

    <?php

    require('config.php');

    $cod = $_POST['codigoProductoR'];
    $n = $_POST['nombreProductoR'];
    $m = $_POST['marcaProductoR'];
    $p = $_POST['precioProductoR'];
    $c = $_POST['cantidadProductoR'];

    $sql = "INSERT INTO productos (codigo, nombre, marca, precio, cantidad) VALUES ('$cod', '$n', '$m', '$p', '$c')";

    if (mysqli_query($conn, $sql)) {

    ?>

        <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Registro</h4>
                      <button class="close" onclick="location.href='../inventario.html'">&times;</button>
                    </div>

                    <div class="modal-body">

                      <?php
                        echo "Producto registrado satisfactoriamente" . "<br>";
                      ?>

                    </div>

                    <div class="modal-footer">
                      <button class="btn btn-danger" onclick="location.href='../inventario.html'">Cerrar</button>
                    </div>

                  </div>
        </div>
        <?php

    } else {

    ?>

        <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Error</h4>
                      <button class="close" onclick="location.href='../inventario.html'">&times;</button>
                    </div>

                    <div class="modal-body">

                      <?php
                        echo "Error al registrar el producto: <br>" . $sql . "<br>" . mysqli_error($conn);
                      ?>

                    </div>

                    <div class="modal-footer">
                      <button class="btn btn-danger" onclick="location.href='../inventario.html'">Cerrar</button>
                    </div>

                  </div>
        </div>
        <?php

    }
    mysqli_close($conn);
    ?>