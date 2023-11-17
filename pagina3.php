<?php
session_start();
$nombreCompleto = $_SESSION['nombre'] . ' ' . $_SESSION['apellido'];
echo 'El nombre completo es: ' . $nombreCompleto;
echo '<a href="pagina4.php"> Ir a pagina 4 para cerrar session </a>';


?>