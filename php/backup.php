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
     <title>Respaldo - PCElectronics - Administrador</title>
 </head>
 <body>

     <?php
     // variables
     date_default_timezone_set("America/Bogota");
     require('config.php');

     //Para utilizar Mysqldump y realizar el respaldo, se debe declarar una variable haciendo referencia a la ubicación del archivo mysqldump.exe
     $mysqldump='"../../../MySQL/bin/mysqldump.exe"';
     $backup_file = '"../backups/"'.$dbname. "-" .date("Y-m-d-H-i-s"). ".sql";
     system("$mysqldump --no-defaults -u $username -p$password $dbname > $backup_file", $output);

     switch($output){
     case 0:
     ?>

         <div class="modal-dialog">
               <div class="modal-content">

                     <div class="modal-header">
                           <h4 class="modal-title">Excelente</h4>
                           <button class="close" onclick="location.href='../index.html'">&times;</button>
                     </div>

                     <div class="modal-body">

                             <?php
                                 echo 'La base de datos <b>' .$dbname .'</b> se ha respaldado correctamente en la siguiente ruta '.getcwd().'/' .$backup_file .'</b>';
                             ?>

                     </div>

                     <div class="modal-footer">
                       <button class="btn btn-danger" onclick="location.href='../index.html'">Cerrar</button>
                     </div>

               </div>
         </div>

      <?php
     break;

     case 1:
     ?>

         <div class="modal-dialog">
               <div class="modal-content">

                 <!-- Modal Header -->
                 <div class="modal-header">
                       <h4 class="modal-title">Error</h4>
                       <button class="close" onclick="location.href='../index.html'">&times;</button>
                 </div>

                 <div class="modal-body">

                         <?php
                             echo 'Se ha producido un error al exportar <b>' .$dbname .'</b> a '.getcwd().'/ verifique la siguiente ruta: ' .$backup_file .'</b>';
                         ?>

                 </div>

                 <div class="modal-footer">
                       <button class="btn btn-danger" onclick="location.href='../index.html'">Cerrar</button>
                 </div>

               </div>
         </div>

      <?php
     break;

     case 2:
     ?>

         <div class="modal-dialog">
               <div class="modal-content">

                 <div class="modal-header">
                       <h4 class="modal-title">Error</h4>
                       <button class="close" onclick="location.href='../index.html'">&times;</button>
                 </div>

                 <div class="modal-body">

                     <?php
                         echo 'Se ha producido un error de exportación, compruebe la siguiente información: <br/><br/><table><tr><td>Nombre de la base de datos:</td><td><b>' .$dbname .'</b></td></tr><tr><td>Nombre de usuario MySQL:</td><td><b>' .$username .'</b></td></tr><tr><td>Contraseña MySQL:</td><td><b> '.$password.' </b></td></tr><tr><td>Nombre de host MySQL:</td><td><b>' .$servername .'</b></td></tr></table>';
                     ?>

                 </div>

                 <div class="modal-footer">
                       <button class="btn btn-danger" onclick="location.href='../index.html'">Cerrar</button>
                 </div>

               </div>
         </div>

      <?php
     break;

     }
      mysqli_close($conn);
     ?>