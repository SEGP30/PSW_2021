 <?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "bdunad04";

// Cadena de conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Verificar la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}