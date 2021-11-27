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
     <title>Ejecución - PCElectronics - Administrador</title>
 </head>
 <body>

     <?php

        $servername = "localhost";
        $username = "root";
        $password = "12345678";
        $dbname = "bdpsw2021";

        // Cadena de conexión
        $conn = mysqli_connect($servername, $username, $password,  $dbname);
        // Verificar la conexión
        if (!$conn) {

        ?>

            <div class="modal-dialog">
                      <div class="modal-content">

                        <div class="modal-header">
                          <h4 class="modal-title">Notificación</h4>
                          <button class="close" onclick="location.href='../index.html'">&times;</button>
                        </div>

                        <div class="modal-body">

                        <?php
                            die("Conexión fallida: " . mysqli_connect_error());
                        ?>

                        </div>

                        <div class="modal-footer">
                          <button class="btn btn-danger" onclick="location.href='../index.html'">Cerrar</button>
                        </div>

                      </div>
            </div>
            <?php

        }

        // Comando sql para crear la tabla
        $sql = "CREATE TABLE productos (
        codigo INT(10) PRIMARY KEY,
        nombre VARCHAR(30),
        marca VARCHAR(20),
        precio INT(20),
        cantidad INT(10)
        )";

        if (mysqli_query($conn, $sql)) {

        ?>
            <div class="modal-dialog">
                      <div class="modal-content">

                        <div class="modal-header">
                          <h4 class="modal-title">Creación de tabla</h4>
                          <button class="close" onclick="location.href='../index.html'">&times;</button>
                        </div>

                        <div class="modal-body">

                        <?php
                            echo "La tabla de Productos ha sido creada correctamente";
                        ?>

                        </div>

                        <div class="modal-footer">
                          <button class="btn btn-danger" onclick="location.href='../index.html'">Cerrar</button>
                        </div>

                      </div>
            </div>
            <?php

        } else {

        ?>
            <div class="modal-dialog">
                      <div class="modal-content">

                        <div class="modal-header">
                          <h4 class="modal-title">Notificación</h4>
                          <button class="close" onclick="location.href='../index.html'">&times;</button>
                        </div>

                        <div class="modal-body">

                        <?php
                            echo "Error creando la tabla de Productos: " . mysqli_error($conn);
                        ?>

                        </div>

                        <div class="modal-footer">
                          <button class="btn btn-danger" onclick="location.href='../index.html'">Cerrar</button>
                        </div>

                      </div>
            </div>
            <?php

    }
    mysqli_close($conn);
    ?>