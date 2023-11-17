<?php
session_start();
$id = $_SESSION['id'];
$nombre = $_SESSION['usuario'];

$conn = new mysqli(SEVERMAME, USERNAME, PASSWORD, DBNAME);

// generate query 
$sql = "SELECT ciudad from usuario where IDUsuario = $id";

$resultado = mysqli_query($conn, $sql) or die(mysqli_error($conn));

$row = mysqli_fetch_array($resultado);
$ciudad = $row['ciudad'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de usuario</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $nombre . ' ' . $ciudad; ?>!</h1>
    <a href="cerrar.php">Cerrar Sesion</a>
</body>
</html>
